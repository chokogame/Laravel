<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // ここではダミーデータを使用します
        $posts = [
            ['id' => 1, 'title' => '最初のブログ記事', 'excerpt' => '最初の記事の抜粋...', 'created_at' => '2023-03-15'],
            ['id' => 2, 'title' => '2つ目のブログ記事', 'excerpt' => '2つ目の記事の抜粋...', 'created_at' => '2023-03-16'],
            // 他の記事...
        ];

        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        // 実際にはDBからの取得になります
        $post = [
            'id' => 1,
            'title' => 'ブログ記事タイトル',
            'content' => 'これはブログ記事の内容です。...',
            'created_at' => '2023-03-15'
        ];

        return view('blog.show', compact('post'));
    }

    public function category($category)
    {
        // カテゴリー名に基づいて記事をフィルタリングする処理
        $posts = [
            ['id' => 1, 'title' => 'カテゴリー記事1', 'excerpt' => '抜粋...', 'created_at' => '2023-03-15'],
            ['id' => 2, 'title' => 'カテゴリー記事2', 'excerpt' => '抜粋...', 'created_at' => '2023-03-16'],
        ];

        return view('blog.category', compact('posts', 'category'));
    }
}
