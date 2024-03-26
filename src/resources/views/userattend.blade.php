@extends('layouts.app')

@section('main')

<p class="name">{{$user->name}}</p>

<table>
  <tr>
    <th>日付</th>
    <th>勤務開始</th>
    <th>勤務終了</th>
    <th>休憩時間</th>
    <th>勤務時間</th>
  </tr>
  @foreach ($adjustAttends as $attend)
  <tr>
    <td>{{ $attend->date }}</td>
    <td>{{ $attend->start_time }}</td>
    <td>{{ $attend->end_time }}</td>
    <td>{{ $attend->rest_sum }}</td>
    <td>{{ $attend->work_time }}</td>
  </tr>
  @endforeach
</table>
{{ $adjustAttends->links('pagination::default') }}

@endsection