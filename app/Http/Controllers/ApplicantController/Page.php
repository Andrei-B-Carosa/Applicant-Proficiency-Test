<?php

namespace App\Http\Controllers\ApplicantController;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use NavisBorealis\WonderwordsPhp\WonderWordsGenerator;

class Page extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        // $wonderwords = WonderWordsGenerator::phrase();

        // return $wonderwords;

        Cookie::queue('applicant-page',$request->segment(2),1440);
        return view('applicant.layout.app');
    }

    public function page(PageRequest $page_request)
    {
        Cookie::queue('applicant-page',$page_request->page,1440);
        return match($page_request->page){

            'home' => view('applicant.0001'),

            'typing-test' => view('applicant.0002'),

            'excel-test' => view('applicant.0003'),

            'test-result' => view('applicant.0004'),

            default => false

        };
    }
}
