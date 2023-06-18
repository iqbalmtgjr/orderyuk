<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = ['user_id', 'username', 'jenis_kelamin', 'no_hp', 'tgl_lahir', 'alamat'];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
