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

  <div class="stamp__item">
    <form class="stamp__button" action="/attend" method="post">
      @csrf
        <button class="stamp__button-submit" type="submit">勤務開始</button>

    </form>
    <form class="stamp__button" action="/leave" method="post">
      @csrf
      <button class="stamp__button-submit" type="submit">勤務終了</button>
    </form>
    <form class="stamp__button" action="/breakbegin" method="post">
      @csrf
      <button class="stamp__button-submit" type="submit">休憩開始</button>
    </form>
    <form class="stamp__button" action="/breakend" method="post">
      @csrf
      <button class="stamp__button-submit" type="submit">休憩終了</button>
    </form>
  </div>
</div>

@endsection