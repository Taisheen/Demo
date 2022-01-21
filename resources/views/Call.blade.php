@extends("layouts.template")
@section("title","Call")
@section("head")
<link rel ="stylesheet" href="/css/style.css">
<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/key.js') }}"></script>
@section("content")
    <div id = "js-videos-container" class="videos-container">
        <video id="js-local-video" width="500px" height = "300px" autoplay muted playsinline></video>
        <video id="pear-video" width="500px" height = "300px" autoplay muted playsinline></video>
    </div>
    <div class="controller-container">
    <p id="my-id">あなたのID</p>
        <button id="js-join-trigger">開始</button>
        <button id="js-leave-trigger">退出</button>
        <pre class="messages" id="js-messages"></pre>
    </div>
@endsection