<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">

    <?php
        //テスト配列
        $groups = array('テスト１','テスト２','テスト３','テスト４','テスト５','テスト６','テスト７','テスト８');
        $users = array('ユーザー１','ユーザー２','ユーザー３','ユーザー４','ユーザー５','ユーザー６','ユーザー７');
    ?>

</head>
<body>
    <header>
            <h1>TELESA</h1>
                <nav>
                    <ul class="nav_links">
                        <li><a href="Monitor_nav.html">匿名モニタ</a></li>
                        <li><a href="#">チャット機能</a></li>
                        <li><a href="#">通話機能</a></li>
                    </ul>
                </nav>
            <a class="cta" href="#"><button>会員登録</button></a>
    </header>
    <div class="container-fluid">
        <!--flex-wrap nowrapで折り返しの禁止-->
        <div class="row" id="app">
            <!--画面左3割グループ―ユーザ画面-->
            <div class="col-md-3  table-borderless table-striped">
                <ul class="list-group list-group-flush" v-chat-scroll>
                <br>
                @foreach($groups as $group)
                <tr class="groups-list"><!-- comment -->
                    <td>
                        <!--機能アイコン-->
                        <div class="message-icon rounded-circle bg-secondary text-white fs-3">
                                <i class="fas fa-user">{{$group}}</i>
                        </div><!-- .message-icon -->
                        <a href="/selectGroup" id="link">{{$group}}<br>
                    </td>
                    <td class="list-test">

                        <!--グループ名-->

                        <!--要修正-->
                    </td>
                    <br>
                </tr>
                @endforeach
                </ul>
                <div class="edit-group">
                    <!--グループ作成画面へのリンク予定-->
                    <a href="" id="link"> グループに参加またはグループの作成</a>
                </div>
            </div>
            <!--画面右６割チャット画面-->
            <!--横幅を指定するとレイアウトが崩れる-->
            <div class="col-md-9">
                <!--<h1>Chat room</h1>-->
                <!--<div class="offset-4 col-md-4 offset-sm-1 col-sm-10">-->
                <!--numberOfUserで何人が存在するか表示する-->
                <li class="list-group-item active">Chat<span class="badge badge-pill badge-danger">@{{numberOfUser}}</span></li>
                <ul class="list-group list-group-flush" v-chat-scroll>
                <!--入力中にtyping...と表示する-->
                    <div class="badge badge-info">@{{typing}}</div>
                    <message v-for="value,index in chat.message"
                    :key=value.index
                    :color=chat.color[index]
                    :user=chat.user[index]
                    :time=chat.time[index]>
                    <div class="message d-flex flex-row align-items-start mb-4">
                        <div class="message-icon rounded-circle bg-secondary text-white fs-3">
                            <i class="fas fa-user">ユーザ</i>
                        </div><!-- .message-icon -->
                        <p class="message-text p-2 ms-2 mb-0 bg-warning">
                            @{{value}}
                        </p><!-- .message-text -->
                    </div><!-- .message -->
                    <!--@{{value}}-->
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Type your message here.." v-model='message' @keyup.enter='send'>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<footer>
    <div class="function fixed-bottom ">
        ここは各機能メニゅーの予定です
    </div>
</footer>
</html>
