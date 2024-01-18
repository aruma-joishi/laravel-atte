@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
  <div class="register-form__heading">
    <h2>会員登録</h2>
  </div>
  <form class="form" action="/register" method="post">
    @csrf
    <div class="form__group">

      <div class="form__group--text">
        <input type="text" placeholder="名前" name="name" value="{{ old('name') }}" />
      </div>
      <div class="form__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>

      <div class="form__group--text">
        <input type="email" placeholder="メールアドレス" name="email" value="{{ old('email') }}" />
      </div>
      <div class="form__error">
        @error('email')
        {{ $message }}
        @enderror
      </div>

      <div class="form__group--text">
        <input type="password" placeholder="パスワード" name="password" />
      </div>
      <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
      </div>

      <div class="form__group--text">
        <input type="password" placeholder="確認用パスワード" name="password_confirmation" />
      </div>
      <div class="form__error">
        @error('password')
        {{ $message }}
        @enderror
      </div>
    </div>

    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>

  <div class="redirect">
    <div class="redirext--text">
      <p>アカウントをお持ちの方はこちらから</p>
    </div>
    <div class="redirect--button">
      <a href="/login">ログイン</a>
    </div>
  </div>

</div>
@endsection