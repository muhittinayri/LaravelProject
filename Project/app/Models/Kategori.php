<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    //Silindiği anda veritabanından silinmicek. Veritabanındaki silinme_tarihine silindiği tarihi güncelleyeeck.
    use SoftDeletes;
    protected $table = "kategori";
    //protected $fillable = ['kategori_adi','slug'];
    //belirlenen kolon korunmaya alınır.- Veritabanına eklenmez-Tüm kolon değerleri istenildiği gibi eklenebilir.
    protected $guarded = [];
    const CREATED_AT = 'olusturulma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public function urunler(){
        //Çoka çok ilişki = belongsToMany
        return $this->belongsToMany('App\Models\Urun','kategori_urun');
    }
}
