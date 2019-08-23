@extends('layout.admin')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    @endif
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <form action="{{route('admin_update', $books->id)}}" method="POST">
        {{method_field("PUT")}}
        <input type="text" name="book_name" class="form-control" id="usr" value="{{$books->book_name}}">
        <br>
        <input type="submit" class="btn btn-primary" value="Edit">
        {{ csrf_field() }}
    </form>
@endsection