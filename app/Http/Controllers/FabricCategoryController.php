<?php

namespace App\Http\Controllers;

use App\Fabric;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\FabricCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;

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
        $category = Redis::get("categories.$slug");
        $fabrics = Redis::get("fabrics.$slug");
        if ($category !== null) {
            $category = json_decode($category);
            $fabrics = json_decode($fabrics);
        } else {
            $category = FabricCategory::all()->where('slug', $slug)->first();
            Redis::set("categories.$slug", json_encode($category->toArray()));

            $fabrics = Fabric::all()->where('fabric_category_id', $category->id);
            Redis::set("fabrics.$slug", json_encode($fabrics->toArray()));
        }

        $renderedView = Redis::get("fabric_category.$slug");
        if ($renderedView === null) {
            $renderedView = view('pages.category', compact('category', 'fabrics'))->render();
            Redis::set("fabric_category.$slug", $renderedView);
        }

        return $renderedView;
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
