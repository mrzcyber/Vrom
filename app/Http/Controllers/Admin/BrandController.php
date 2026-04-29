<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;

class BrandController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Brand::get();
        dd($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $data=['name'=>$request->name];
        Brand::create($data);
        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        dd($brand);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
       dd($brand);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        $data = $brand->update([
            'name'=>$request->name
        ]);
        dd($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $data = $brand->delete();
        dd($data);
    }
}
