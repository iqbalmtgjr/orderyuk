<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    use HasFactory;

    protected $table = 'daftar_resto';
    protected $fillable = ['user_id', 'nama_resto', 'alamat', 'status', 'operasional', 'foto'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    function menu()
    {
        return $this->hasOne(Menu::class);
    }
}
