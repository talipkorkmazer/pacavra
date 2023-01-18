<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\FabricCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class FabricCategoryController extends Controller
{
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
     * @param  StoreCategoryRequest  $request
     * @return Response
     */
    public function store(StoreCategoryRequest $request)
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
        $category = FabricCategory::all()->where('slug', $slug)->first();

        return view('pages.category', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  FabricCategory  $category
     * @return Response
     */
    public function edit(FabricCategory $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCategoryRequest  $request
     * @param  FabricCategory  $category
     * @return Response
     */
    public function update(UpdateCategoryRequest $request, FabricCategory $category): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  FabricCategory  $category
     * @return Response
     */
    public function destroy(FabricCategory $category)
    {
        //
    }
}
