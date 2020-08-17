<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\TransferRequest;
use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{

    public function post(Request $request){
        $transfer = new Transfer;
        $transfer->id = $request->id;
        $transfer->nama_transfer = $request->nama_transfer;
        $transfer->email_transfer = $request->email_transfer;
        $transfer->tgl_transfer = $request->tgl_transfer;
        $transfer->bank_customer = $request->bank_customer;
        $transfer->no_rek_customer = $request->no_rek_customer;
        $transfer->total_bayar = $request->total_bayar;
        $transfer->save();
    
        return ResponseFormatter::success($transfer, 'Data berhasil diambil');
    }
}
