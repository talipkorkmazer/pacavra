<?php

namespace App\Http\Controllers;

use App\Fabric;
use App\FabricCategory;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
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
        $category = FabricCategory::all()->where('slug', $slug)->first();
        $fabrics = Fabric::where('fabric_category_id', $category->id)->simplePaginate(12);

        $renderedView = Redis::get("rendered_fabric_category.$slug");
        if (true || $renderedView === null) {
            $renderedView = view('pages.category', compact('category', 'fabrics'))->render();
            Redis::set("rendered_fabric_category.$slug", $renderedView);
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
