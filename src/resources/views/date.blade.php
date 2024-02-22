@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="date-content">
  <div class="date-heading">
    <button class=button>
      <p>2021-11-01</p>
      <button class=button>
  </div>

  <div class="date-item">
    <table class="date-item__inner">
      <tr class="date-item__row">
        <th class="date-item__header">名前</th>
        <th class="date-item__header">勤務開始</th>
        <th class="date-item__header">勤務終了</th>
        <th class="date-item__header">休憩時間</th>
        <th class="date-item__header">勤務時間</th>
      </tr>

      @foreach ($users as $user)
      <tr class="date-item__main">
        <td class="date-item__content">{{$user['name']}}</td>
        @foreach ($attends as $attend)
        @if ($attend['user_id'] == $user['id'])
        <td class="date-item__content">{{$attend['attend(H-m-s)']}}</td>
        <td class="date-item__content">{{$attend['leave']}}</td>
        <td class="date-item__content">{{$attend['breaktime']}}</td>
        <td class="date-item__content">{{$attend['worktime']}}</td>
        @endif
        @endforeach
      </tr>
      @endforeach

    </table>
  </div>
</div>
@endsection
</div>