@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="date-content">
  <div class="date-heading">
    <bottun class=before>
      <p>2021-11-01</p>
      <bottun class=after>
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

      <tr class="date-item__main">
        <td class="date-item__content">{{ $users['name']}}</td>
        <td class="date-item__content">{{ $attends['attend']}}</td>
        <td class="date-item__content">{{ $attends['leave']}}</td>
        <td class="date-item__content">{{ $attends['breaktime']}}</td>
        <td class="date-item__content">{{ $attends['attend']}}</td>
      </tr>
    </table>
  </div>
  {{ $contacts->appends(request()->query())->links() }}
</div>
@endsection
</div>