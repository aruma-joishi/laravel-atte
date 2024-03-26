@extends('layouts.app')

@section('main')
<div class="date-container">
  <a class="arrow" href="{!! '/attend/' . ($num - 1) !!}">&lt;</a>
  <p class="date">{{ $fixed_date }}</p>
  <a class="arrow" href="{!! '/attend/' . ($num + 1) !!}">&gt;</a>
</div>
<table>
  <tr>
    <th>名前</th>
    <th>勤務開始</th>
    <th>勤務終了</th>
    <th>休憩時間</th>
    <th>勤務時間</th>
  </tr>
  @foreach ($adjustAttends as $attend)
  <tr>
    <td>{{ $attend->users->name }}</td>
    <td>{{ $attend->start_time }}</td>
    <td>{{ $attend->end_time }}</td>
    <td>{{ $attend->rest_sum }}</td>
    <td>{{ $attend->work_time }}</td>
  </tr>
  @endforeach
</table>
{{ $adjustAttends->links('pagination::default') }}

@endsection