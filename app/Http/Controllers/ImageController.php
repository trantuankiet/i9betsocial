<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apps-ecommerce-add-image');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'files' => 'required',
            'files.*' => 'required|image|mimes:jpg,jpeg,png|max:1024',
        ]);

        $files = [];
        if ($request->file('files')) {
            foreach ($request->file('files') as $key => $file) {
                $file_name = time().rand(1,99) . '.' . $file->extension();  
                $file->move(public_path('uploads'), $file_name);
                $files[]['name'] = $file_name;
            }
        }
    
        foreach ($files as $key => $file) {
            Image::create($file);
        }
       
        return back()->with('success','Image uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
