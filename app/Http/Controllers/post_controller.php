<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
class post_controller extends Controller
{
    public function home()
    {
        $post = post::where('is_terbaru', '1')->get();
        return view('index_2', ['post' => $post]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_safari()
    {
        $post = post::where('kategori', 2)->paginate(9);
        return view('safari', ['post' => $post]);
    }
    public function index_pengajian()
    {
        $post = post::where('kategori', 4)->paginate(9);
        return view('pengajian', ['post' => $post]);
    }

    public function index_khotmil()
    {
        $post = post::where('kategori', 3)->paginate(9);
        return view('khotmil', ['post' => $post]);
    }

    public function index_berbagi()
    {
        $post = post::where('kategori', 1)->paginate(9);
        return view('berbagi', ['post' => $post]);
    }

    public function show_post($id)
    {
        $post = post::where('id', $id)->get();
        return view('detail', ['post' => $post]);
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

    public function berita_terbaru($id){
        $check = post::where('is_terbaru',1)->count();
        if($check==4){
            $posts = post::where('is_terbaru', '1')->orderBy('tgl_terbaru')->first();
            $posts->is_terbaru = 0;
            $posts->tgl_terbaru = NULL;
            $posts->save();
        }
        
        $post = post::find($id);
        $post->is_terbaru = '1';
        $post->tgl_terbaru = Carbon::now();
        $post->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post;
        $request->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName1 = time() . 1 . '.' . $request->image1->extension();



        $request->image1->move(public_path('images'), $imageName1);
      
        $post->gambar1 =  $imageName1;
       
        if ($request->hasFile('image2')) {
            $imageName1 = time() . 2 . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $imageName1);
            $post->gambar2 =  $imageName1;
        }
        if ($request->hasFile('image3')) {
            $imageName1 = time() . 3 . '.' . $request->image3->extension();
            $request->image3->move(public_path('images'), $imageName1);
            $post->gambar3 =  $imageName1;
        }
        if ($request->hasFile('image4')) {
            $imageName1 = time() . 4 . '.' . $request->image4->extension();
            $request->image4->move(public_path('images'), $imageName1);
            $post->gambar4 =  $imageName1;
        }
        if ($request->hasFile('image5')) {
            $imageName1 = time() . 5 . '.' . $request->image5->extension();
            $request->image5->move(public_path('images'), $imageName1);
            $post->gambar5 =  $imageName1;
        }
        $post->judul = $request->judul;
        $post->isi = $request->editor;
        if ($request->kategori == "Al Minhaj Berbagi") {
            $post->kategori = 1;
        } elseif ($request->kategori == "Safari Taklim") {
            $post->kategori = 2;
        } elseif($request->kategori == "Pengajian Rutin"){
            $post->kategori = 4;
        }
        else {
            $post->kategori = 3;
        }
        // $post->kategori = $request->kategori;
        $post->author = "Admin 1";
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
        $post = post::where('id', $id)->get();
        return view('edit_post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::where('id', $id)->get();
        return view('edit_post', ['post' => $post]);
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
        $post = post::find($id);
        $request->validate([
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image1')) {
            File::delete(public_path('images/' . $post->gambar1));
            $imageName1 = time() . 1 . '.' . $request->image1->extension();
            $request->image1->move(public_path('images'), $imageName1);
            $post->gambar1 =  $imageName1;
        }
        if ($request->hasFile('image2')) {
            File::delete(public_path('images/' . $post->gambar2));
            $imageName1 = time() . 2 . '.' . $request->image2->extension();
            $request->image2->move(public_path('images'), $imageName1);
            $post->gambar2 =  $imageName1;
        }
        if ($request->hasFile('image3')) {
            File::delete(public_path('images/' . $post->gambar3));
            $imageName1 = time() . 3 . '.' . $request->image3->extension();
            $request->image3->move(public_path('images'), $imageName1);
            $post->gambar3 =  $imageName1;
        }
        if ($request->hasFile('image4')) {
            File::delete(public_path('images/' . $post->gambar4));
            $imageName1 = time() . 4 . '.' . $request->image4->extension();
            $request->image4->move(public_path('images'), $imageName1);
            $post->gambar4 =  $imageName1;
        }
        if ($request->hasFile('image5')) {
            File::delete(public_path('images/' . $post->gambar5));
            $imageName1 = time() . 5 . '.' . $request->image5->extension();
            $request->image5->move(public_path('images'), $imageName1);
            $post->gambar5 =  $imageName1;
        }
        $post->judul = $request->judul;
        $post->isi = $request->editor;
        if ($request->kategori == "Al Minhaj Berbagi") {
            $post->kategori = 1;
        } elseif ($request->kategori == "Safari Taklim") {
            $post->kategori = 2;
        } elseif($request->kategori == "Pengajian Rutin"){
            $post->kategori = 4;
        } else {
            $post->kategori = 3;
        }
        $post->author = "Admin 1";
        $post->save();
        // $post = post::where('id', $id)->get;
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
        post::destroy($id);
        return redirect()->route('index');
    }
}
