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
    <form class="form" action="/attend" method="post">
      @csrf
      <div class="stamp__button">
        <button class="stamp__button-submit" type="submit">勤務開始</button>
      </div>
    </form>
    <form class="form" action="/leave" method="post">
      @csrf
      <div class="stamp__button">
        <button class="stamp__button-submit" type="submit">勤務終了</button>
      </div>
    </form>
    <form class="form" action="/breakbegin" method="post">
      @csrf
      <div class="stamp__button">
        <button class="stamp__button-submit" type="submit">休憩開始</button>
      </div>
    </form>
    <form class="form" action="/breakend" method="post">
      @csrf
      <div class="stamp__button">
        <button class="stamp__button-submit" type="submit">休憩終了</button>
      </div>
    </form>
  </div>
</div>

@endsection