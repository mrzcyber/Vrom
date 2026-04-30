<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class ItemController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Item::with(['image'=>function($query){
            $query->oldest()->limit(1);
        }])->get();
        // return view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request)
    {
        $item = Item::create($request->only(['name','type_id','brand_id','features','price','star','review']));

        if($request->hasFile('image')){
            foreach($request->file('image') as $file){
                $url = $file->store('produk','public');
                $item->image()->create(['path'=>$url]);
            }
        }

    //    return view
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $data = $item->get();
        // return view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemRequest $request, Item $item)
    {
        $input = $request->only(['name','type_id','brand_id','features','price','star','review']);

        if($request->hasFile('image')){
            $imageOld = $item->image()->select('path')->get();
            foreach($imageOld as $old){
                if(Storage::disk('public')->exists($old->path)){
                    Storage::disk('public')->delete($old->path);
                }
            }
            $item->image()->delete();
             
            foreach($request->file('image') as $file){
                $url = $file->store('produk','public');
                $item->image()->create(['path'=>$url]);
            }
        }
        $result=$item->update($input);
        
        // return view
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
          $imageOld = $item->image()->select('path')->get();
            foreach($imageOld as $old){
                if(Storage::disk('public')->exists($old->path)){
                    Storage::disk('public')->delete($old->path);
                }
            }
            $item->delete();

            // return view

    }
}
