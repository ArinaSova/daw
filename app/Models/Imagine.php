<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagine extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagine'
    ];
    public function imagines(){
        return $this->hasOne(Product::class);
    }
}
