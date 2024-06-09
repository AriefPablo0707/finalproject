<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $table = "order";
    protected $fillable = ["id_pelanggan", "tanggal_pemesanan","total_harga"];

    public function buku(): BelongsTo
    {
        return $this->belongsTo(Buku::class);
    }
}