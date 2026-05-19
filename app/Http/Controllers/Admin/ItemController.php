<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ItemRequest;
use App\Models\Brand;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bookedToday = Item::whereHas('booking', function ($query) {
        $query->whereDate('start_date', '<=', today())
          ->whereDate('end_date', '>=', today())
          ->whereIn('payment_status', ['pending', 'success']);
        })->count();
        
        $car = Item::count();

        if($request->get('q')){
        $q = $request->get('q');
             $data =Item::where('name', 'LIKE', "%{$q}%")
    ->with(['thumbnail', 'brand', 'type', 'booking' => function ($query) {
        $query->whereDate('start_date', '<=', today())
              ->whereDate('end_date', '>=', today())
              ->whereIn('payment_status', ['pending', 'success']);
    }])->paginate(6);

        return view('admin.item.index',compact('bookedToday','data','car'));
        }


        $data =Item::with(['thumbnail', 'brand', 'type', 'booking' => function ($query) {
    $query->whereDate('start_date', '<=', today())
          ->whereDate('end_date', '>=', today())
          ->whereIn('payment_status', ['pending', 'success']);
}])->paginate(6);

        return view('admin.item.index',compact('bookedToday','data','car'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brand = Brand::get();
        $type = Type::get();
        return view('admin.item.create',compact('brand','type'));
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

        return redirect()->route('admin.item.index')->banner('item berhasil ditambahkan');

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
        $data = $item->load('type','brand','image');
        $brand = Brand::get();
        $type = Type::get();
        
        return view('admin.item.edit',compact('data','brand','type'));
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
        
        return redirect()->route('admin.item.index')->banner('item berhasil diperbarui');
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

            return redirect()->route('admin.item.index')->banner('Item berhasil dihapus');

    }
}
