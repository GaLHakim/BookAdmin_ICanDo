@extends('layout.admin')

@section('title', 'Laravel')

@section('content')

    {{-- @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    </div>
    @endif --}}
    {{-- @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif --}}
    
    <form action="{{route('admin_store')}}" method="POST">
        <input type="text" name="book_name" class="form-control" id="book_name" placeholder="Judul Buku">
        <br>
        <input type="submit" id="add_book" class="btn btn-primary" value="Add Book" data-toggle="modal" data-target="#myModal">
        {{ csrf_field() }}
    </form>
    <br>
    @foreach($book as $books)
        <table class="table line-table">
            <tr>
                <td class="col"><a href="/admin/{{$book->id}}">{{ $book->book_name }}</a></td>
                <td class="col d-inline-flex">
                    <a href="{{route('admin_edit', $book->id)}}"><button type="submit">Edit</button></a>
                    <form action="{{route('admin_delete', $book->id)}}" method="POST">
                        {{method_field("DELETE")}}
                        {{ csrf_field() }}
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    @endforeach  
@endsection