<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFabricRequest;
use App\Http\Requests\UpdateFabricRequest;
use App\Fabric;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class FabricController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFabricRequest  $request
     * @return Response
     */
    public function store(StoreFabricRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return Application|Factory|View
     */
    public function show($slug)
    {
        $fabric = Fabric::all()->where('slug', $slug)->first();

        return view('pages.fabric', compact('fabric'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Fabric  $fabric
     * @return Response
     */
    public function edit(Fabric $fabric)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateFabricRequest  $request
     * @param  Fabric  $fabric
     * @return Response
     */
    public function update(UpdateFabricRequest $request, Fabric $fabric)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Fabric  $fabric
     * @return Response
     */
    public function destroy(Fabric $fabric)
    {
        //
    }
}
