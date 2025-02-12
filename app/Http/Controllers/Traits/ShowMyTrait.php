<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\JsonResponse;

trait ShowMyTrait
{
    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $model = $this->service->findOrFailById($id);

        return $this->sendOkJsonResponse(
            $this->service->resourceToData($this->resourceClass, $model)
        );
    }
}