@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered" style="width:95%;margin: 0 auto;">
    <div class="row">
        <div style="margin:0px 0px 0px 70px;">
            <a href="articles/create"><button type="button" class="btn btn-info" style="margin: 20px; color: white;">Tambah Article</button></a>
            <a class="btn btn-success" href="{{ route('cetak_pdf') }}"> Cetak PDF </a>
        </div>
    </div>

    <tr>
        <th>Judul</th>
        <th>Konten</th>
        <th>Gambar</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <!-- <td>{{ $article->title }}</td> -->
        <td><a href="{{ route('articles.edit',['article' => $article->id]) }}">{{ $article->title }}</a></td>
        <td>{{ $article->content }}</td>
        <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td>
    </tr>
    @endforeach
</table>
@endsection