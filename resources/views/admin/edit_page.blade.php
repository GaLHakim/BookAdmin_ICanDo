@extends('layout.admin')

@section('content')
    <form action="{{route('page_update', $pages->id)}}" method="POST">
        {{method_field("PUT")}}
        <input type="text" name="page_name" class="form-control" id="usr" value="{{$pages->page_name}}">
        <br>
        <input type="submit" class="btn btn-primary" value="Edit">
        {{ csrf_field() }}
    </form>
@endsection