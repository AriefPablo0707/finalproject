<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $fillable = ["judul", "harga_buku", "jumlah_stock", "harga_subtotal"];

        public function pelanggan(): BelongsTo
        {
            return $this->belongsTo(Pelanggan::class);
        }
        public function kategori(): BelongsTo
        {
            return $this->belongsTo(Kategori::class);
        }
        public function order()
        {
            return $this->hasMany(Order::class);
        }

}