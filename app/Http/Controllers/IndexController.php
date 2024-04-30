<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $all_albums = DB::table('albums')->get();
        return view('home')->with(['albums' => $all_albums]);
    }
    public function photosPerAlbumId($id) {
        $photos_by_id = DB::table('photos')->where('album_id', $id)->get();
        return view('photos_by_album_id')->with(['photos' => $photos_by_id]);
    }
}
