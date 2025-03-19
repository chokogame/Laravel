@extends('layouts.app')

@section('title', 'ホーム - ブログサイト')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">ブログへようこそ！</h1>
        <p class="lead">このブログでは様々なトピックについて情報を共有しています。</p>
        <hr class="my-4">
        <p>最新の記事をチェックしてみてください。</p>
        <a class="btn btn-primary btn-lg" href="/blog" role="button">ブログを見る</a>
    </div>

    <!-- AdSense広告 -->
    <div class="my-4 text-center">
        <!-- ここにAdSenseコードを追加 -->
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <h2>カテゴリー1</h2>
            <p>カテゴリー1の説明文をここに入れます。</p>
            <a href="/category/category1" class="btn btn-secondary">詳細を見る</a>
        </div>
        <div class="col-md-4">
            <h2>カテゴリー2</h2>
            <p>カテゴリー2の説明文をここに入れます。</p>
            <a href="/category/category2" class="btn btn-secondary">詳細を見る</a>
        </div>
        <div class="col-md-4">
            <h2>カテゴリー3</h2>
            <p>カテゴリー3の説明文をここに入れます。</p>
            <a href="/category/category3" class="btn btn-secondary">詳細を見る</a>
        </div>
    </div>
@endsection
