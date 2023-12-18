<?php

namespace App\Http\Controllers\ApplicantController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

            'typing-test' => '',

            'excel-test' => '',

            default => false

        };
    }
}
