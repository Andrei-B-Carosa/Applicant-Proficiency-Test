<?php

namespace App\Http\Controllers\MISController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

class Page extends Controller
{
    private $url;
    private $request;

    public function __construct(Request $request)
    {
        $this->url = $request->segment(2);
        $this->request = $request;
    }

    public function index()
    {
        Cookie::queue('mis-page', $this->url,1440);
        return view('mis.layout.app');
    }

    public function page()
    {
        $data  = $this->request->page ?? Cache::get('mis-page','dashboard');
        Cookie::queue('mis-page',$data,1440);

        return match($data){

            'dashboard' => view('mis.0001'),

            'device-list' => view('mis.0002'),
            'device-details' => view('mis.00021'),

            'accountability' => view('mis.0003'),
            'accountability-details' => view('mis.00031'),

            'repairs' => view('mis.0004'),
            'repair-details' => view('mis.00041'),

            'device-type' => view('mis.0005'),

            'material-list' => view('mis.0006'),
            'material-details' => view('mis.00061'),

            'material-issuance' => view('mis.0007'),
            'issuance-details' => view('mis.00071'),

            'employees' => view('mis.0008'),
            'employee-details' => view('mis.00081'),

            'company-site' => view('mis.0009'),

            'departments' => view('mis.0009'),

            'users' => view('mis.0010'),
            'user-details' => view('mis.00101'),

            'roles' => view('mis.0009'),

            default => false

        };
    }
}
