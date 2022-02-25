<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UrunDetay extends Model
{
    //tablo adı olarak işaretliyoruz
    protected $table = "urun_detay";

    //createdat veya updatedat özelliklerini kullanmak istemezsek model içerisinde bu şekilde belirtebiliriz.
    public $timestamps = false;

    public function urun(){
        return $this->belongsTo('App\Models\Urun');
    }
}
