<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" type="text/css">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="header-top-left">
                <h1 class="header-top-left-logo">ロゴ</h1>
                <form class="header-top-left-fotm">
                    <input type="text" name="search" placeholder="仕事を検索する">
                    <input type="submit" value="検">
                </form>
            </div>

            <ul class="header-top-right">
                <li><a href="#">ログイン</a></li>
                <li><a href="#">登録</a></li>
            </ul>
        </div>

        <div class="header-bottom">
            <div class="header-bottom-searchselect">
                <ul>
                    <li><a href="#">カテゴリから探す</a></li>
                </ul>
                <ul>
                    <li><a href="#">出品者を探す</a></li>
                </ul>
            </div>
            <div class="header-bottom-buttons">
                <a href="">仕事を探す</a>
                <a href="">出品する</a>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="sidebar">
            <p>カテゴリから探す</p>
            <ul>

            @foreach($categories as $category)
            <li><a href="#">{{ $category->name }}</a></li>
            @endforeach
        </div>
        <main>
        @yield('content')
        </main>
    </div>
    <footer>
        <div class="footer-cat cat1">
            <p>カテゴリ</p>
            <ul>
                <li><a href="#">WEBWEBWEB</a></li>
                <li><a href="#">WEB</a></li>
                <li><a href="#">WEB</a></li>
                <li><a href="#">WEBWEBWEB</a></li>
                <li><a href="#">WEB</a></li>
                <li><a href="#">WEBWEB</a></li>
                <li><a href="#">WEB</a></li>
                <li><a href="#">WEB</a></li>
                <li><a href="#">WEWEBWEBWEBB</a></li>
            </ul>
        </div>
        <form class="footer-question">
            <label>ご意見・ご要望をお聞かせください
            <textarea name="" id="" cols="30" rows="5"></textarea>
            <div>
                <input type="submit" class="footer-question-subbtn">
            </div>

        </form>
    </footer>

</body>
</html>