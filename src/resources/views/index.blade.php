@extends('layouts.app')

@section('main')
@if (session('result'))
<div class="flash_message">
  {{ session('result') }}
</div>
@endif
@if( Auth::check() )
<p class="welcome">{{ Auth::user()->name }}さんお疲れ様です！</p>
@endif
<div class="card-container">
  @if(!isset($is_attend_start))
  <a href="/attend/start" class="attend-btn">勤務開始</a>
  @else
  <p class="attend-btn inactive">勤務開始</p>
  @endif

  @if(!isset($is_attend_end))
  <a href="/attend/end" class="attend-btn">勤務終了</a>
  @else
  <p class="attend-btn inactive">勤務終了</p>
  @endif

  @if(isset($is_rest))
  @if(!$is_rest)
  <a href="/rest/start" class="attend-btn">休憩開始</a>
  @else
  <p class="attend-btn inactive">休憩開始</p>
  @endif
  @endif

  @if(isset($is_rest))
  @if($is_rest)
  <a href="/rest/end" class="attend-btn">休憩終了</a>
  @else
  <p class="attend-btn inactive">休憩終了</p>
  @endif
  @endif
</div>

@endsection