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
      <button class="stamp__button__submit" type="submit">勤務開始</button>
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    </form>
    <form class="stamp__button" action="/leave" method="post">
      @method('PATCH')
      @csrf
      <button class="stamp__button-submit" type="submit">勤務終了</button>
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    </form>
    <form class="stamp__button" action="/breakbegin" method="post">
      @method('PATCH')
      @csrf
      <button class="stamp__button-submit" type="submit">休憩開始</button>
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    </form>
    <form class="stamp__button" action="/breakend" method="post">
      @method('PATCH')
      @csrf
      <button class="stamp__button-submit" type="submit">休憩終了</button>
      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    </form>
  </div>
</div>

@endsection