<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepta extends Model
{
    use HasFactory;
    public function index()
    {
        $table = 'receptas';
    }
}
