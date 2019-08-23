<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Detail_Pages extends Model
{
    protected $table = 'detail_pages';
    public $timestamps = false;

    public function pages()
    {
        return $this->belongsTo('App\AdminModels\Pages');
    }
}
