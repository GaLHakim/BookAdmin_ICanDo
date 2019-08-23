<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    public $timestamps = false;

    public function books()
    {
        return $this->belongsTo('App\AdminModels\Books');
    }

    public function detail_pages()
    {
        return $this->hasMany('App\AdminModels\Detail_Pages', 'page_id', 'id');
    }
}
