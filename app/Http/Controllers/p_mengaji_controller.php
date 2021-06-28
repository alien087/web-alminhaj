<?php

namespace App\Http\Controllers;

use App\post_mengaji;
use Illuminate\Http\Request;

class p_mengaji_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post_mengaji::all();
        return view('mengaji', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post_mengaji;
        $post->judul = $request->judul;
        $post->isi = $request->editor;
        $post->author = "Admin 1";
        $post->link = $request->link_youtube;
        $post->save();
        return back()->with('success', 'Selamat, Post telah berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_detail = post_mengaji::where('id',$id)->get();
        return view('detail_video', ['post_detail' => $post_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post_mengaji::where('id', $id)->get();
        return view('edit_mengaji', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post_mengaji::find($id);
        $post->judul = $request->judul;
        $post->isi = $request->editor;
        $post->author = "Admin 1";
        $post->link = $request->link_youtube;
        $post->save();
        return back()->with('success', 'Selamat, Post telah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post_mengaji::destroy($id);
        return redirect()->route('mengaji');
    }
}
