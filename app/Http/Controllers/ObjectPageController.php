<?php

namespace App\Http\Controllers;

use App\Models\Objects;
use App\Models\Post;
use Illuminate\Http\Request;

class ObjectPageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::select('id_post', 'name_post', 'img_post', 'img_teacher', 'name_teacher', 'date_post', 'id_zoom', 'id_object')->with('zoom')->with('objects')->with('zoom')->with('objects')->where('id_object', $id)->latest('id_post')->get();
        $name_object = Objects::find($id)->name_object;

        return view('page.object')->with(compact('post', 'name_object'));
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
