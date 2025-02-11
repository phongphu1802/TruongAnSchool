<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\JsonResponse;

trait DestroyMyTrait
{
    /**
     * @param $id
     * @return JsonResponse
     */
    public function destroyMy($id)
    {
        $this->service->destroyByUserId($id);

        return $this->sendOkJsonResponse();
    }
}
