<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggan";
    protected $fillable = ["nama_pelanggan", "alamat_pelanggan", "email_pelanggan","nomor_telepon_pelanggan"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}