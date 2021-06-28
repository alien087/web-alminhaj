<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\murrotal;
use File;
class murrotal_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = murrotal::all();
        return view('audios', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $audio = new murrotal;
        $murrotal = time() . 1 . '.' . $request->murrotal->extension();
        $request->murrotal->move(public_path('audio'), $murrotal);
        $audio->file =  $murrotal;
        $audio->judul = $request->judul;
        $audio->save();

        return back()->with('success', 'Selamat, Murrotal telah berhasil ditambahkan.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = murrotal::where('id', $id)->get();
        return view('edit_audio', ['post' => $post]);
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
        $audio = murrotal::find($id);
        if ($request->hasFile('murrotal')) {
            File::delete(public_path('audio/' . $audio->file));
            $murrotal = time() . 1 . '.' . $request->murrotal->extension();
            $request->murrotal->move(public_path('audio'), $murrotal);
            $audio->file =  $murrotal;
        }
        $audio->judul = $request->judul;
        $audio->save();

        return back()->with('success', 'Selamat, Murrotal telah berhasil diedit.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        murrotal::destroy($id);
        return redirect()->route('audios');
    }
}
