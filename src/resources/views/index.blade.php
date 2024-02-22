@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="stamp__content">
  <div class="stamp__heading">
    @if (Auth::check())
    <p>ようこそ、{{ Auth::user()->name }}さん</p>
    @endif
  </div>

  <div class="stamp">
    <form class="stamp__button" action="/attend" method="post">
      @csrf
      <button class="stamp__button__submit" type="submit" name="user_id" value="{{ Auth::user()->id }}">勤務開始</button>
    </form>
    <form class="stamp__button" action="/leave" method="post">
      @method('PATCH')
      @csrf
      <button class="stamp__button__submit" type="submit" name="user_id" value="{{ Auth::user()->id }}">勤務終了</button>
    </form>
    <form class="stamp__button" action="/breakbegin" method="post">
      @method('PATCH')
      @csrf
      <button class="stamp__button__submit" type="submit" name="user_id" value="{{ Auth::user()->id }}">休憩開始</button>
    </form>
    <form class="stamp__button" action="/breakend" method="post">
      @method('PATCH')
      @csrf
      <button class="stamp__button__submit" type="submit" name="user_id" value="{{ Auth::user()->id }}">休憩終了</button>
    </form>
  </div>
</div>

@endsection