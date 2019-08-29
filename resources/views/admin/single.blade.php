@extends('layout.admin')

@section('title', 'Laravel')

@section('content')
    {{-- @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}
            @endforeach
        </div>
    @endif
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif --}}

    <!-- Judul Buku + Deskripsi -->
    <div class="card mb-3" style="max-width: 100%">
        <div class="row no-gutters">
            <div class="col-mdw-4">
                <img src="{{ asset('UploadedFile/foto/'.$books->image) }}" class="card-img-top" alt="cover" height="300">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <div class="table">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">{{ $books->book_name }}</h5>
                        </div>
                        <div class="col">
                            {{-- <a id="edit" href="{{route('admin_edit', $books->id)}}"><i class="fas fa-edit" data-toggle="modal" data-target="#exampleModalEditJudul"></i></a> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="card-text">{{ $books->book_description }}</p>
                        </div>
                        <div class="col">
                            {{-- <a id="edit" href="{{route('admin_edit', $books->id)}}"><i class="fas fa-edit" data-toggle="modal" data-target="#exampleModalEditDescrip"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Modul Edit Judul-->
    {{-- <div class="modal fade" id="exampleModalEditJudul" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title Tambah_Buku" id="exampleModalCenterTitle">Edit Judul</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('admin_update', $books->id)}}" method="POST">
                    {{method_field("PUT")}}
                    <input type="text" name="book_name" class="form-control" id="usr" value="{{$books->book_name}}">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Edit">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    </div> --}}
    <!-- Modul Edit Description-->
    {{-- <div class="modal fade" id="exampleModalEditDescrip" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title Tambah_Buku" id="exampleModalCenterTitle">Edit Deskripsi</h5>
            </div>
            <div class="modal-body">
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
                    <input type="text" name="description" class="form-control" id="usr" value="{{$books->book_description}}">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Edit">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    </div> --}}

    <form>
        <div class="input-group">
            <input type="text" class="form-control rounded mx-sm-3 caribuku" placeholder="&#xF002 Cari Halaman">
            <i id="tambahbuku" class="fas fa-plus-circle fa-3x" data-toggle="modal" data-target="#exampleModalCenter"></i>
        </div>
    </form>
    <!-- Modal Tambah Halaman-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title Tambah_Buku" id="exampleModalCenterTitle">Tambah Halaman</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{ route('pageSave', $books->id) }}" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" name="foto" class="form-control-file border">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="comment">Judul Halaman:</label>
                                    <input type="text" name="page_name" class="form-control mr-sm-2" id="page_name" placeholder="Ketik judul halaman">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Deskripsi:</label>
                                    <textarea name="page_description" class="form-control" rows="5" id="comment" placeholder="Ketik deskripsi atau isi"></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <input type="submit" id="add_book" class="btn btn-primary Simpan" value="Simpan" data-toggle="modal" data-target="#myModal">
                                    {{ csrf_field() }}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <br>
    @foreach ($books->pages as $page)
    <a href="/page/{{$page->id}}">
        <table class="table line-table">
            <tr class="row">
                <td class="col-sm-1">
                    <img src="{{ asset('UploadedFile/foto/'.$page->image) }}" alt="cover" width="30" height="30">
                </td>
                <td class="col-sm-8">
                    {{ $page->page_name }}
                </td>
                {{-- <td class="col d-inline-flex">
                    <a href="{{ route('page_edit', $page->id) }}"><button type="submit">Edit</button></a>
                    <form action="{{route('page_delete', $page->id)}}" method="POST">
                        {{method_field("DELETE")}}
                        {{ csrf_field() }}
                        <button type="submit">Delete</button>
                    </form>
                    </td> --}}
            </tr>
        </table>    
    </a>
    @endforeach  
@endsection