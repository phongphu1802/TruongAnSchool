<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\JsonResponse;

trait EditMyTrait
{
    /**
     * @param $id
     * @return JsonResponse
     */
    public function editMy($id)
    {
        $request = app($this->editMyRequest);
        $model =$this->service->findOneWhereOrFailByUserUuid($id);
        $this->service->update($model, $request->all());

        return $this->sendOkJsonResponse(
            $this->service->resourceToData($this->resourceClass, $model)
        );
    }
}
