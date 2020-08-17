<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuestbookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'nama_tamu' => $this->nama_tamu ,
            'email_tamu' => $this->email_tamu,
            'asal_tamu' => $this->asal_tamu,
            'nohp_tamu' => $this->nohp_tamu,
            'komentar_tamu' => $this->komentar_tamu,
            'nilai_tamu' => $this->nilai_tamu
        ];
    }
}
