<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->truncate();

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'elektronik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar/Tablet','slug'=>'bilgisayar-tablet','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Telefon','slug'=>'telefon','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'TV ve Ses Sistemleri','slug'=>'tv-ses-sistemleri','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kamera','slug'=>'kamera','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitap','slug'=>'kitap']);
        DB::table('kategori')->insert(['kategori_adi'=>'Edebiyat','slug'=>'edebiyat','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Çocuk','slug'=>'cocuk','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar','slug'=>'bilgisayar','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Sınavlara Hazırlık','slug'=>'sinavlara-hazirlik','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Dergi','slug'=>'dergi']);
        DB::table('kategori')->insert(['kategori_adi'=>'Spor','slug'=>'spor','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Mobilya','slug'=>'mobilya']);
        DB::table('kategori')->insert(['kategori_adi'=>'Mutfak','slug'=>'mutfak','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Dekorasyon','slug'=>'dekorasyon']);
        DB::table('kategori')->insert(['kategori_adi'=>'Boya','slug'=>'boya','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Makyaj','slug'=>'makyaj','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kişisel Bakım','slug'=>'kişisel-bakım']);
        DB::table('kategori')->insert(['kategori_adi'=>'Krem','slug'=>'krem','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Giyim ve Moda','slug'=>'giyim-moda']);
        DB::table('kategori')->insert(['kategori_adi'=>'Pantolon','slug'=>'pantolon','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Anne ve Cocuk','slug'=>'anne-cocuk']);
        DB::table('kategori')->insert(['kategori_adi'=>'Mama','slug'=>'mama','ust_id'=>$id]);
    }
}
