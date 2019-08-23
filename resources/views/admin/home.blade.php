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
    
    <form>
        <div class="input-group">
            <input type="text" class="form-control rounded mx-sm-3 caribuku" placeholder="&#xF002 Cari Buku">
            <i id="tambahbuku" class="fas fa-plus-circle fa-3x" data-toggle="modal" data-target="#ModalTambahBuku"></i>
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="ModalTambahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title Tambah_Buku" id="exampleModalCenterTitle">Tambah Buku</h5>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="{{route('adminSave')}}" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="file" name="foto" class="form-control-file border">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="book_name">Judul Buku:</label>
                                        <input type="text" name="book_name" class="form-control mr-sm-2" id="book_name" placeholder="Judul Buku">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Deskripsi:</label>
                                        <textarea name="book_description" class="form-control" rows="5" id="description" placeholder="Deskripsi"></textarea>
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
    <div class="row">
        @foreach($books as $book)
        <div class="col-sm-4">
            <a href="/admin/{{ $book->id }}">
                <div class="card mb-3">
                    <img src="{{ asset('UploadedFile/foto/'.$book->image) }}" class="card-img-top" alt="cover" height="300">
                    <div class="card-body">
                        <h5 class="fontjudul font-italic font-weight-bold"><small>{{ $book->book_name }}</small></h5>
                        <h6 class="fontdescription text-justify"><small>{{ $book->book_description }}</small></h6>
                        <h6 href="#" class="fontcount float-sm-right"><small>{{ count($book->pages) }} Halaman</small></h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    {{-- <table class="table line-table">
        <tr>
            <td class="col"></td>
            <td class="col d-inline-flex">
                <a href="{{route('admin_edit', $book->id)}}"><button type="submit">Edit</button></a>
                <form action="{{route('admin_delete', $book->id)}}" method="POST">
                    {{method_field("DELETE")}}
                    {{ csrf_field() }}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    </table>   --}}
@endsection