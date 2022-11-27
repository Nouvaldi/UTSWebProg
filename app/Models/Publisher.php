<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $table = 'publishers';
    protected $fillable = ['name', 'address', 'phone', 'email', 'image'];

    public function books(){
        return $this->hasMany(Book::class, 'publisher_id');
    }
}