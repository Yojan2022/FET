<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books';
    
    protected $fillable = ['name', 'last_name', 'folio', 'page', 'record'];
}
