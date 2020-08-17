<?php
// berisi satu kelas yang bisa di panggil disemua namespace data ini
// jadi nanti kalo return yang di panggil bukan view tapi responseformatter ini
// response formatter untuk helper api, jika return data yang di panggil
// bukan view melainkan response formatter

namespace App\Http\Controllers\API;
class ResponseFormatter
{
  // ini untuk format api yang ada, untuk merespon, formatnya begini
  protected static $response = [
    'meta' => [
      'code' => 200,
      'status' => 'success',
      'message' => null
    ],
    'data' => null
  ];

//   fungsi untuk meng output data jika sukses
// jadi kalo panggil fungsi ini, kita bisa parsing data dari eloquent atau database dan bisa beri database secara langsung
  public static function success($data = null, $message = null)
  {
    //   menyimpan message ini ke dalam variabel di protected message yang ada diatas
    // kalo public static menggunakan sef:... kalo di function biasa menggunakan this->load..
    self::$response['meta']['message'] = $message;
    self::$response['data'] = $data;

    // panggil untuk respon atau mengoutput json
    return response()->json(self::$response, self::$response['meta']['code']);
  }

  public static function error($data = null, $message = null, $code = 400)
  {
    self::$response['meta']['status'] = 'error';
    self::$response['meta']['code'] = $code;
    self::$response['meta']['message'] = $message;
    self::$response['data'] = $data;

    return response()->json(self::$response, self::$response['meta']['code']);
  }

}