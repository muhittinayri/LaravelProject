<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;

class AnasayfaController extends Controller {
    public function index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->take(8)->get();

        //with = UrunDetay'a ait ürünleride çek anlamına gelir.Veritabanında birden fazla işlem yapmamış oluruz.
        //$urunler_slider = UrunDetay::with('urun')->where('goster_slider',1)->take(5)->get();

        $urunler_slider = Urun::select('urun.*')
            ->join('urun_detay','urun_detay.urun_id','urun_id')
            ->where('urun_detay.goster_slider',1)
            ->orderBy('guncelleme_tarihi','desc')
            ->take(4)->get();

        $urun_gunun_firsati = Urun::select('urun.*')
            ->join('urun_detay','urun_detay.urun_id','urun_id')
            ->where('urun_detay.goster_gunun_firsati',1)
            ->orderBy('guncelleme_tarihi','desc')
            ->first();

        $urunler_one_cikan = Urun::select('urun.*')
            ->join('urun_detay','urun_detay.urun_id','urun_id')
            ->where('urun_detay.goster_one_cikan',1)
            ->orderBy('guncelleme_tarihi','desc')
            ->take(4)->get();

        $urunler_cok_satan =  Urun::select('urun.*')
            ->join('urun_detay','urun_detay.urun_id','urun_id')
            ->where('urun_detay.goster_cok_satan',1)
            ->orderBy('guncelleme_tarihi','desc')
            ->take(4)->get();


        $urunler_indirimli =  Urun::select('urun.*')
            ->join('urun_detay','urun_detay.urun_id','urun_id')
            ->where('urun_detay.goster_indirimli',1)
            ->orderBy('guncelleme_tarihi','desc')
            ->take(4)->get();

        return view('anasayfa',compact('kategoriler','urunler_slider','urun_gunun_firsati','urunler_one_cikan','urunler_cok_satan','urunler_indirimli'));
    }
}

/*
 * $isim = "Esra";
        $soyisim = "Gündüzoğlu";
        $isimler = ['Cem','Esra','Murat','Ebru','Aydın'];

        $kullanicilar = [
        ['id'=>1,'kullanici_adi'=> 'Cem'],
        ['id'=>2,'kullanici_adi'=> 'Esra'],
        ['id'=>3,'kullanici_adi'=> 'Murat'],
        ['id'=>4,'kullanici_adi'=> 'Ebru'],
        ['id'=>5,'kullanici_adi'=> 'Aydın'],
        ];

        //return view('anasayfa',compact('isim','soyisim','isimler'));
        return view('anasayfa',compact('isim','soyisim','isimler','kullanicilar'));
        //return view('anasayfa',['isim'=> 'Cem','soyisim'=>'Gündüzoğlu']);

        //compact = değişken değerlerinden dizi oluşturmayı sağlar
        //return view('anasayfa',compact('isim','soyisim'));

        //return view('anasayfa')->with(['isim'=>$isim, 'soyisim'=>$soyisim]);
 */
