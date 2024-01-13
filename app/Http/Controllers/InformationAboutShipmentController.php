<?php

namespace App\Http\Controllers;

use App\Services\InformationAboutShipmentService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class InformationAboutShipmentController extends AbstractController
{
    protected $dir = 'informationaboutshipments';

    protected $serviceClass = InformationAboutShipmentService::class;

    protected $permissionCheck = false;

    public function setConfig()
    {
        $this->config = [
            'rules' => [
                //
            ]
        ];
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $response = $this->service->edit($id);
        return view('admin.' . $this->dir . '.index', compact('response'));
    }

}
