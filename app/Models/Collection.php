<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Ramadhan abdul aziz 6706223026 46-04
class Collection extends Model
{
    use HasFactory;

    protected $table = "collections";

    protected $fillable = [
        "namaKoleksi",
        "jenisKoleksi",
        "jumlahKoleksi"
    ];

    // protected $guarded = [""];
}
