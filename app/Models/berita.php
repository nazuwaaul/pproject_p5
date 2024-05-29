<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = ['judul','isi_berita', 'tanggal', 'id_penulis','id_kategori', 'status', 'image'];
    protected $visible = ['judul', 'isi_berita', 'tanggal', 'id_penulis','id_kategori', 'status','image'];

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_komentar');
    }
}
