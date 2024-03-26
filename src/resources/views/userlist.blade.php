@extends('layouts.app')

@section('main')

<table>
  <tr>
    <th>名前</th>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td><a href="userlist/{{$user->id}}">{{ $user->name }}</a></td>

  </tr>
  @endforeach
</table>

@endsection