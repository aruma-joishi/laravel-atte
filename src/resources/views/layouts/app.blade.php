<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h2>Atte</h2>
    </div>

    @if (Auth::check())
    <ul class="header-nav">
      <li class="header-nav__item">
        <a class="header-nav__link" href="/">ホーム</a>
      </li>
      <li class="header-nav__item">
        <a class="header-nav__link" href="/date">日付一覧</a>
      </li>
      <li class="header-nav__item">
        <form action="/logout" method="post">
          @csrf
          <button class="header-nav__button">ログアウト</button>
        </form>
      </li>
    </ul>

      @endif

    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <div class="credit">Atte,inc.</div>
  </footer>
</body>

</html>