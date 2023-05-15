<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        if (session()->get(session()->getId()) === true) {
            return view('pages.home');
        } else {
            return view('pages.choose_site');
        }
    }

    public function show()
    {
        session([session()->getId() => true]);
        return redirect()->route('home');
    }


}
