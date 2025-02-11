<?php

namespace App\Abstracts;

use App\Models\AddOn;
use App\Models\Department;
use App\Models\Location;
use App\Models\App;
use App\Models\Role;
use App\Models\Team;
use App\Models\UserProfile;
use App\Models\UserTeam;
use Aws\Exception\CredentialsException;
use Aws\S3\Exception\S3Exception;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AbstractRestAPIController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    protected $resourceCollectionClass;

    protected $resourceClass;

    protected $storeRequest;

    protected $editRequest;

    protected $indexRequest;

    protected $editMyRequest;

    protected $storeMyRequest;

    protected $loginRequest;

    /**
     * Get the guard to be used during authentication.
     *
     * @return StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * Return Auth User
     *
     * @return Authenticatable|null
     */
    protected function user()
    {
        return Auth::user();
    }

    /**
     * @param bool $status
     * @param $message
     * @param array $data
     * @param int $httpStatus
     * @return JsonResponse
     */
    protected function sendJsonResponse($status = true, $message, $data = [], $httpStatus = Response::HTTP_OK)
    {
        $result = [
            'status' => $status,
            'message' => $message,
        ];

        if (!empty($data)) {
            $result = array_merge($result, $data);
        }

        return response()->json($result, $httpStatus);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    protected function sendOkJsonResponse($data = [])
    {
        return $this->sendJsonResponse(true, __('messages.success'), $data);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    protected function sendCreatedJsonResponse($data = [])
    {
        return $this->sendJsonResponse(true, __('messages.success'), $data, Response::HTTP_CREATED);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    protected function sendUnAuthorizedJsonResponse($data = [])
    {
        return $this->sendJsonResponse(false, __('auth.failed'), $data, Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    public function sendValidationFailedJsonResponse(array $data = [])
    {
        return $this->sendJsonResponse(false, __('messages.given_data_invalid'), $data, Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    public function sendInternalServerErrorJsonResponse(array $data = [])
    {
        return $this->sendJsonResponse(false, __('messages.internal_server_error'), $data, Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @param array $data
     * @return JsonResponse
     */
    public function sendBadRequestJsonResponse(array $data = [])
    {
        return $this->sendJsonResponse(false, __('messages.bad_request'), $data, Response::HTTP_BAD_REQUEST);
    }

    /**
     * @param int $length
     * @return string
     */
    public function generateRandomString(int $length = 4): string
    {
        $permittedChars = '0123456789abcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($permittedChars), 0, $length);
    }

    function checkVietnamese($str)
    {
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D' => 'Đ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
        }

        return $str;
    }

    public function removeCache($userUuid)
    {
        Cache::forget('platform_permission_' . $userUuid);
        Cache::forget('add_on_permission_' . $userUuid);
        Cache::forget('team_leader_add_on_permission_' . $userUuid);
        Cache::forget('team_permission_' . $userUuid);
        Cache::forget('team_add_on_permission_' . $userUuid);
        Cache::forget('config');
    }

    public function removeTeamPermissionCache($userUuid)
    {
        Cache::forget('team_permission_' . $userUuid);
    }

    public function removeTeamLeaderPermissionCache($userUuid)
    {
        Cache::forget('team_leader_add_on_permission_' . $userUuid);
    }

    public function removeTeamAddOnPermissionCache($userUuid)
    {
        Cache::forget('team_add_on_permission_' . $userUuid);
    }
}