<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Type::get();
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
    public function store(TypeRequest $request)
    {
        $data = [
            'name' => $request->name
        ];

        $result = Type::create($data);
        dd($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        $data = $type;
        dd($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeRequest $request, Type $type)
    {
        $result = $type->update([
            'name'=>$request->name
        ]);
        dd($result);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $result = $type->delete();
        dd($result);
    }
}
