@extends("layouts.template")
@section("title","Top_page")
@section("head")
<link rel ="stylesheet" href="/css/style.css">
@endsection
@section("content")
<div class="room">
    <div class="make_room">
      <form method="get">
        <input type="text" placeholder="作成したい部屋番号を入力" width="100%" name ="Mroom" required >
        <label>部屋を作成</label>
        <button><a href ="{{url('/Call')}}">作成</a></button>
      </form>
    </div>
    <div class="join_room">
      <form method="get">
        <input type="text" placeholder="参加したい部屋を入力" width="100%" name = "Jroom" required>
        <label>部屋に参加</label>
        <button>参加</button>
      </form>
    </div>
</div>
@endsection
<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/key.js') }}"></script>
