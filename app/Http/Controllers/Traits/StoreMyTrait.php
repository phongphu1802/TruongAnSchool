<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\JsonResponse;

trait StoreMyTrait
{
    /**
     * @return JsonResponse
     */
    public function storeMy()
    {
        $request = app($this->storeMyRequest);

        $model = $this->service->create(array_merge($request->all(), ['user_uuid' => auth()->user()->uuid]));

        return $this->sendCreatedJsonResponse(
            $this->service->resourceToData($this->resourceClass, $model)
        );
    }
}
