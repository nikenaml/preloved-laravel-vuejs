<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\GuestbookRequest;
use App\Models\Guestbook;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    // public function guestbook(GuestbookRequest $request){
    // $data = $request;
    // // $id = $request->input('id');
    // // $limit = $request->input('limit', 10);
    // // $name = $request->input('name');
    // // $slug = $request->input('slug');
    // // $type = $request->input('type');
    // // $price_from = $request->input('price_from');
    // // $price_to = $request->input('price_to');

    // $guestbook =  Guestbook::create($data);

    // $guestbook->details()->saveMany($details);

    // return ResponseFormatter::success($guestbook);
    // }

    // public function all(GuestbookRequest $request){
    //     // $data = $request;
    //     // $id = $request->input('id');
    //     // $limit = $request->input('limit', 10);
    //     // $nama_tamu = $request->input('nama_tamu');
    //     // $email_tamu = $request->input('email_tamu');
    //     // $asal_tamu = $request->input('asal_tamu');
    //     // $nohp_tamu = $request->input('nohp_tamu');
    
    //     // if($id){
    //     //     $guestbook = Guestbook::with('guestbooks')
    //     // }
    //     // }
    //     return response()->json{
    //         [
    //             "message" => "GET Method Succes"
    //         ]
    //     };
    // }

    public function post(Request $request){
        $guestbook = new Guestbook;
        $guestbook->id = $request->id;
        $guestbook->nama_tamu = $request->nama_tamu;
        $guestbook->email_tamu = $request->email_tamu;
        $guestbook->asal_tamu = $request->asal_tamu;
        $guestbook->nohp_tamu = $request->nohp_tamu;
        $guestbook->komentar_tamu = $request->komentar_tamu;
        $guestbook->nilai_tamu = $request->nilai_tamu;
        $guestbook->save();
    
        return ResponseFormatter::success($guestbook, 'Data berhasil diambil');
    }
}
