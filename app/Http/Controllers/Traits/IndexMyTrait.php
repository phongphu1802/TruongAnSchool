<?php

namespace App\Http\Controllers\Traits;

use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use Illuminate\Http\JsonResponse;

trait IndexMyTrait
{
    /**
     * @return JsonResponse
     */
    public function indexMy()
    {
        $models = $this->service->getCollectionByUserIdWithPagination(app($this->indexRequest));

        return $this->sendOkJsonResponse(
            $this->service->resourceCollectionToData($this->resourceCollectionClass, $models)
        );
    }
}
