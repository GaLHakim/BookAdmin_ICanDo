<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AdminModels\Books;
use App\AdminModels\Pages;

class ImagePageController extends Controller
{
    public function image_page(Request $request, $id)
    {
        $pages = new Page;
        $pages->image = $request->image;
        $pages->book_id = $id;
        $pages->save();
        return redirect(route('admin_show', $id))->with('success', "Data successfully added");
    }
}
