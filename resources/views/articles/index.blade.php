@extends('app')
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <ul class="articles">
            @foreach ($articles as $article)
            <li class="article">{{ $article->title }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
