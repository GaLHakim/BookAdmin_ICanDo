<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AdminModels\Books;
use App\AdminModels\Pages;
use App\AdminModels\Detail_Pages;

class PageController extends Controller
{   
    // public function show($id)
    // {
    //     $pages = Pages::with(['detail_pages'])->find($id);
    //     return view('admin.detail')->with('pages', $pages);
    // }
    
    // public function post_page(Request $request, $id)
    // {
    //     // echo '<pre>';
    //     // print_r($_POST);  
    //     // echo '</pre>';  
    // }

    // public function store_page(Request $request, $id)
    // {
    //     // $messages = ['page_name.required'=>'Name is required'];
    //     // $this->validate($request,[
    //     //     'page_name'=>'required|min:9'
    //     // ],$messages);

    //     $pages = new Pages;
    //     $pages->page_name = $request->page_name;
    //     $pages->image = $request->image;
    //     $pages->book_id = $id;
    //     $pages->save();
    //     return redirect(route('admin_show', $id))->with('success', "Data successfully added");
    // }
    public function save(Request $r, $id)
    {
        $pages = new Pages;
        $pages->book_id = $id;
        $pages->page_name = $r->input('page_name');
        $pages->page_description = $r->input('page_description');
        $foto = $r->file('foto');

        $pages->image = $foto->getClientOriginalName();
        $foto->move(public_path('UploadedFile/foto/'), $foto->getClientOriginalName());

        $pages->save();
        return redirect(route('adminShow', $id));
    }

    // public function edit_page($id)
    // {
    //     $pages = Pages::find($id);
    //     return view('admin.edit_page')->with('page', $page);
    // }
    
    // public function update_page(Request $request, $id)
    // {
    //     $pages = Pages::find($id);
    //     $pages->page_name = $request->page_name;
    //     $pages->save();
    //     return redirect(route('admin_show', $pages->book_id));
    // }

    // public function delete_page($id)
    // {
    //     $pages = Pages::find($id);
    //     $pages->delete();
    //     return redirect(route('admin_show', $page->book_id));
    // }
}
