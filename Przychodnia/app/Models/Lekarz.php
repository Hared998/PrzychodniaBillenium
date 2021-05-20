<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lekarz extends Model
{
    use HasFactory;
    public function index()
    {
        $table = 'lekarzs';
    }
}
