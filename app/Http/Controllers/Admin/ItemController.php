<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

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
        dd($data);
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

        dd($item->load('image'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
