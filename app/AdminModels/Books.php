<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    public $timestamps = false;

    public function pages()
    {
        return $this->hasMany('App\AdminModels\Pages', 'book_id', 'id');
    }
}
