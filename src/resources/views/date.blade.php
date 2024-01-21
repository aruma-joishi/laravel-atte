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

      @for ($i=0; $i<5; $i++)
      <tr class="date-item__main">
        <td class="date-item__content">ヤマダ　太郎</td>
        <td class="date-item__content">10:10:10</td>
        <td class="date-item__content">22:22:22</td>
        <td class="date-item__content">33:33:33</td>
        <td class="date-item__content">44:44:44</td>
      </tr>
      @endfor

    </table>
  </div>
</div>
@endsection
</div>