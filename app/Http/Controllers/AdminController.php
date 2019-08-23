<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AdminModels\Books;
use App\AdminModels\Pages;

class AdminController extends Controller
{
    public function index()
    { 
        $books = Books::with(['pages'])->get();
        return view('admin.home')->with('books', $books);
    }   

    public function show($id)
    {
        $books = Books::with(['pages'])->find($id);
        return view('admin.single')->with('books', $books);
    }

    // public function store(Request $request)
    // {
    //     $messages = ['book_name.required'=>'Name is required'];
    //     $this->validate($request,[
    //         'book_name'=>'required|unique:books||min:8'
    //     ],$messages);

    //     $books = new Books;
    //     $books->book_name = $request->book_name;
    //     $books->book_description = $request->book_description;
    //     $books->book_image = $request->image;
    //     $books->save();

    //     return redirect(route('admin_index'))->with('success', "Data successfully added");
    // }
    public function save(Request $r)
    {
        $books = new Books;
        $books->book_name = $r->input('book_name');
        $books->book_description = $r->input('book_description');
        $foto = $r->file('foto');
        
        $books->image = $foto->getClientOriginalName();
        $foto->move(public_path('UploadedFile/foto/'), $foto->getClientOriginalName());

        $books->save();
        return redirect(route('adminHome'));
    }
    // public function edit($id)
    // {
    //     $books = Books::find($id);
    //     return view('admin.single')->with('books', $books);
    // }
    // public function update($id, Request $request)
    // {
    //     $messages = ['book_name.required'=>'Name is required'];
    //     $this->validate($request,[
    //         'book_name'=>'required|unique:books||min:8'
    //     ],$messages);
    //     $books = Books::find($id);
    //     $books->book_name = $request->book_name;
    //     $books->save();
    //     return redirect(route('admin_index'))->with('success', "Data successfully added");
    // }
    public function update(Request $r, $id)
    {
        $books = Books::find($id);
        $books->book_name = $r->input('book_name');
        $books->book_description = $r->input('book_description');
        $foto = $r->file('image');

        $books->image = $foto->getClientOriginalName();
        $foto->move(public_path('UploadedFile/foto/'), $foto->getClientOriginalName());

        $books->save();
        return redirect(route('adminHome'));
    }

    // public function delete($id)
    // {
    //     $books = Books::find($id);
    //     $books->delete();
    //     return redirect(route('adminHome'));
    // }
    public function delete($id)
    {
        $books = Books::find($id);
        $books->delete();
        return redirect(route('adminHome'));
    }
    
}
