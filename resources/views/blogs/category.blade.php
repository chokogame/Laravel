@extends('layouts.app')

@section('title', $category . ' - ブログサイト')

@section('content')
    <h1>カテゴリー: {{ $category }}</h1>

    <div class="row mt-4">
        @foreach($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['excerpt'] }}</p>
                    <p class="text-muted">投稿日: {{ $post['created_at'] }}</p>
                    <a href="/blog/post-{{ $post['id'] }}" class="btn btn-primary">続きを読む</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-4">
        <a href="/blog" class="btn btn-secondary">&laquo; 記事一覧に戻る</a>
    </div>
@endsection
