<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\API\SubscriberRequest;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function post(Request $request){
        $subscriber = new Subscriber;
        $subscriber->id = $request->id;
        $subscriber->nama_berlangganan = $request->nama_berlangganan;
        $subscriber->email_berlangganan = $request->email_berlangganan;
        $subscriber->save();
    
        return ResponseFormatter::success($subscriber, 'Data berhasil diambil');
    }
}
