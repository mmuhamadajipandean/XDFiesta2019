@extends('layouts.dashboard')
@section('content')

<div class="section-header">
            <h1>Input Lomba</h1>
</div>
<div class="section-body">
    <div class="card">
        <form method="post" action="{{ action('Content\LombaController@store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Lomba</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="summernote-simple" style="display: none;" name="deskripsi"></textarea>
                <div class="form-group">
                    <label>Header Picture</label><br>
                    <input type="file" name="pic">
                </div>
                <div class="card-footer text-right">
                    <input type="submit" value="Lanjut" class="btn btn-primary">
                </div>
            </div>     
        </form>
    </div>
@endsection