<?php

namespace App\Http\Controllers\MISController;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\DashboardService;
use Illuminate\Http\Request;

//SERVICE
use App\Services\Device\DeviceService;
use App\Services\Device\AccountabilityService;

class PageData extends Controller
{
    protected $request;
    protected $array;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->array   = array();
    }

    public function index()
    {
        return match($this->request->data1){

            'dashboard' => (new DashboardService($this->request))->read(),

            'device-list' => (new DeviceService($this->request))->read(),

            'accountability'=> (new AccountabilityService($this->request))->read(),

            'repairs'=> '',

            'departments'=> '',

            'employees'=> '',

            'company-site'=> '',

            'system-user'=> '',

            'device-logs'=> '',

            default => false

        };
    }
}
