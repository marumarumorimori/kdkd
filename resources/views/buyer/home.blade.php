@extends('layouts.flea')

@section('content')
<div class="main-div">
                <h3 class="main-title">人気のカテゴリ</h3>
                <ul>
                    <li>
                        <a href="#">
                            <img src="images/icon.png" alt="" class="w-150 rad">
                            <p>WEBWEB</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/icon.png" alt="" class="w-150 rad">
                            <p>WEBWEB</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/icon.png" alt="" class="w-150 rad">
                            <p>WEBWEB</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/icon.png" alt="" class="w-150 rad">
                            <p>WEBWEB</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/icon.png" alt="" class="w-150 rad">
                            <p>WEBWEB</p>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="main-div">
                <h3 class="main-title">募集中の共同開発</h3>
                <div class="maindiv-flex">
                    @foreach($corabos as $corabo)
                    <div>
                        <h4>{{$corabo->dev_title}}</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>
                    @endforeach

                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>

                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>

                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>
                </div>
            </div>

            <div class="main-div">
                <h3 class="main-title">募集中の仕事</h3>
                <div class="maindiv-flex">
                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>

                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>

                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>

                    <div>
                        <p>カテゴリー</p>
                        <h4>【web細作】〇〇のSNSを作っています</h4>
                        <dl>
                            <dt> 予定開発期間</dt>
                            <dd>1ヶ月</dd>
                            <dt> 募集期間</dt>
                            <dd>あと5日</dd>
                            <dt>提案数</dt>
                            <dd>０</dd>
                        </dl>

                    </div>
                </div>
            </div>

            @endsection