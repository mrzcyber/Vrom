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
        $data = Brand::paginate(10);
     
         return view('admin.brand.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        $data=['name'=>$request->name];
       $result = Brand::create($data);
        
       return redirect()->route('admin.brand.index')->banner('brand berhasil ditambahkan');
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
       $data = $brand;

       return view('admin.brand.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        $data = $brand->update([
            'name'=>$request->name
        ]);
       return redirect()->route('admin.brand.index')->banner('brand berhasil diupdate');
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
