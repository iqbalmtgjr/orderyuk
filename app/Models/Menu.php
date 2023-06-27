<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['daftar_resto_id', 'qty', 'nama_produk', 'kategori', 'harga', 'estimasi'];
    protected $guarded = [];

    public function resto()
    {
        return $this->belongsTo(Resto::class);
    }
}
