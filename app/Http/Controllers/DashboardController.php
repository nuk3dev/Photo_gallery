<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\albums;
use App\Models\photos;

class DashboardController extends Controller
{

    public $albums;
    public $photos;

    public function __construct() {
        $this->albums = new Albums;
       $this->photos = new Photos;
    }

    public function dashboard() {
        return view('management.dashboard');
    }
    public function insertAlbum(Request $request) {
        $request->validate([
            'album' => 'required',
            'image_name' => 'required|file',
        ]);

            $image = $request->file('image_name');
            $image_name = $image->getClientOriginalName();
            request('image_name')->move(public_path('images'), $image_name);

            $this->albums->album_name = $request['album'];
            $this->albums->cover_photo = $image_name;
            $this->albums->created_at = now();
            $this->albums->updated_at = now();
         $this->albums->save();
         return redirect()->back();
    }
    public function albums() {
        $all_albums = DB::table('albums')->get();
        return view('management.manage_albums')->with(['albums' => $all_albums]);
    }
    public function photosByAlbumId($id) {
        $photos = DB::table('photos')
        ->join('albums', 'photos.album_id', '=', 'albums.id')
        ->where('photos.album_id', '=', $id)
        ->select('photos.id', 'photos.title', 'photos.img_name', 'photos.album_id')
        ->get();
        return view('management.edit.edit_album_by_id')->with(['photos' => $photos]);
    }
    public function selectPhotobyalbum($id) {
        $photo = DB::table('photos')->where('id', $id)->limit(1)->get();
        return view('management.edit.edit_photo')->with(['photo' => $photo]);
    }
    public function editPhotoByAlbum(Request $request, $id) {
        $request->validate([
            'album' => 'required',
            'image_name' => 'required|file',
        ]);
        $image = $request->file('image_name');
        $image_name = $image->getClientOriginalName();
        request('image_name')->move(public_path('images'), $image_name);
        $data[] = [
            'album_name' => $request['album'],
            'cover_photo' => $image_name,
        ];
        DB::table('photos')->where('id', $id)->limit(1)->update($data);
        return redirect()->back();
    }
    public function deleteAlbum(Request $request, $id) {
        DB::table('albums')->where('id', $id)->limit(1)->delete();
    }

    public function deletePhoto(Request $request, $id) {
        DB::table('photos')->where('id', $id)->limit(1)->delete();
    }
}
