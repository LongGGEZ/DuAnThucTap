<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function list()
    {
        $service= Service::all();
        return view('pages.list_service',compact('service'));
    }
}
