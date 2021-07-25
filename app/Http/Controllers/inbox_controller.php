<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inbox;
use Illuminate\Support\Facades\Auth;

class inbox_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type_user == '1') {
            $inbox = inbox::where('penerima', 'Admin')->orWhere('penerima', Auth::user()->email)->orderByDesc('created_at')->paginate(10);
            return view('inbox', ['inbox' => $inbox]);
        } else {
            $inbox = inbox::where('penerima', Auth::user()->email)->orderByDesc('created_at')->paginate(10);
            return view('inbox', ['inbox' => $inbox]);
        }
    }
    public function index_outbox()
    {
        if (Auth::user()->type_user == '1') {
            $outbox = inbox::where('pengirim', 'Admin')->orWhere('pengirim', Auth::user()->email)->orderByDesc('created_at')->paginate(10);
            return view('outbox', ['outbox' => $outbox]);
        } else {
            $outbox = inbox::where('pengirim', Auth::user()->email)->orderByDesc('created_at')->paginate(10);
            return view('outbox', ['outbox' => $outbox]);
        }
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
        $inbox = new inbox;
        $inbox->judul = $request->judul;
        $inbox->isi = $request->editor;
        $inbox->penerima = $request->penerima;
        $inbox->pengirim = $request->pengirim;
        $inbox->save();
        return back()->with('success', 'Selamat, pesan berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inbox = inbox::find($id);
        $inbox->dibaca = '1';
        $inbox->save();
        
        $inbox = inbox::where('id', $id)->get();
        return view('inbox_detail', ['inbox' => $inbox]);
    }
    public function show_outbox($id)
    {
        $outbox = inbox::where('id', $id)->get();
        return view('outbox_detail', ['outbox' => $outbox]);
    }

    public function balas(Request $request, $id)
    {
        $inbox_1 = inbox::find($id);
        $inbox = new inbox;
        $inbox->judul = $inbox_1->judul;
        $inbox->isi = $request->editor;
        $inbox->penerima = $inbox_1->pengirim;
        $inbox->pengirim = Auth::user()->email;
        $inbox->save();
        return back()->with('success', 'Selamat, pesan berhasil dikirim.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
