<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Api\ApplicationUseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApplicationUseServiceController extends AbstractController
{
    /**
     * @var string
     */
    protected $service = ApplicationUseService::class;

    /**
     * @return array|JsonResponse
     */
    public function store()
    {
        $item = $this->service->store(request()->all());

        if (isset($item['errors'])) {

            return $this->sendResponse(false, 'Validate error', 422, $item['errors']);
        }
        return $this->sendResponse(true, 'success', 200, $item);

    }

    /**
     * @return array
     */
    public function pageInfo()
    {
        $item = $this->service->pageInfo();

        return $this->sendResponse(true, 'success', 200, $item);
    }

}
