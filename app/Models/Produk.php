<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'himpunan_id',
        'judul',
        'kategori_id',
        'deskripsi',
        'gambar',
        'harga',
        'status',
    ];

    protected $searchableFields = ['*'];

    public function himpunan()
    {
        return $this->belongsTo(Himpunan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
