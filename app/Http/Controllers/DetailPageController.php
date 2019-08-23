<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPageController extends Controller
{
    // public function store_page(Request $request, $id)
    // {
    //     $detail_page = new Detail_Page;
    //     $detail_page->text = $request->text;
    //     $page->book_id = $id;
    //     $page->save();
    //     return redirect()->back();
    // }

    // public function edit_page($id)
    // {
    //     $page = Page::find($id);
    //     return view('admin.edit_page')->with('page', $page);
    // }
    
    // public function update_page(Request $request, $id)
    // {
    //     $page = Page::find($id);
    //     $page->page_name = $request->page_name;
    //     $page->save();
    //     return redirect(route('admin_show', $page->book_id));
    // }

    // public function delete_page($id)
    // {
    //     $page = Page::find($id);
    //     $page->delete();
    //     return redirect(route('admin_show', $page->book_id));
    // }
}
