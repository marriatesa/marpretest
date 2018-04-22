@extends('layouts.app')

@section('title','Book')

@section('page-title','Book')

@section('dashboard-content')
    <h1>Add Book</h1>
        <form action="{{route('book.store')}}" method="Post">
            @CSRF
              <div class="form-group">
                <label for="NamaBook">Judul</label>
                <input type="text" class="form-control" id="NamaBook" name="name">
              </div>

              <div class="form-group">
                <label for="Pengarang">pengarang</label>
                <input type="text" class="form-control" id="Pengarang" name="author">
              </div>

              <div class="form-group">
                <label for="Penerbit">Penerbit</label>
                <input type="text" class="form-control" id="Penerbit" name="publisher">
              </div>
              <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="text" class="form-control" id="Tahun" name="year">
              </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
@endsection