<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nume','pret','imagine','cantitatea','producator','nota'
    ];
    public function products(){
        return $this->belongsTo(Imagine::class);
    }
}
