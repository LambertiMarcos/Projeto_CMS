<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model

{
    use HasFactory;
    public $timestamps = false; // para não procurar a coluna create_at
}

