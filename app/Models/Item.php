<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kategori',
    ];

    public function keuangans(): HasMany
    {
        return $this->hasMany(Keuangan::class);
    }
}
