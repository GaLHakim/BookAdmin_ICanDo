@extends('layout.admin')

@section('title', 'Laravel')

@section('content')
    {{-- <form action="{{ route('page_store', $pages->id) }}" method="POST">
        <input type="text" name="text" class="form-control" id="usr">
        <br>
        <input type="submit" class="btn btn-primary" value="Add Page">
        {{ csrf_field() }}
    </form> --}}
    <br>
    @foreach ($pages->detail_pages as $detail_page)
    <table class="table line-table">
            <tr>
                <td class="col">{{ $detail_page['text'] }}</td>
                <td class="col">{{ $detail_page['gambar'] }}
                    {{-- <a href="{{ route('page_edit', $page->id) }}"><button type="submit">Edit</button></a>
                    <form action="{{route('page_delete', $page->id)}}" method="POST">
                        {{method_field("DELETE")}}
                        {{ csrf_field() }}
                        <button type="submit">Delete</button>
                    </form> --}}
                </td>
                <td class="col">{{ $detail_page['voice'] }}</td>
            </tr>
    </table>    
    @endforeach  
@endsection