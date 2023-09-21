<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

    <!-- メニュー -->
    <header class="header">
      <h1 class="header-ttl">
        <a href="login.html">Atte</a></h1>
        <nav id="header-nav">
          <ul class="header-nav-list">
            <li class="header-nav-item"><a href="{{ url('index') }}">ホーム</a></li>
            <li class="header-nav-item"><a href="{{ url('attendance') }}">日付一覧</a></li>
            <li class="header-nav-item"><a href="{{ url('login') }}" >ログアウト</a></li>
          </ul>
        </nav>
    </header>

    <!-- メインコンテンツ -->
    <section class="table-site">

      <div class="top">
        <h1>
          <p>福場凜太郎さんお疲れ様です！</p>
        </h1>
      </div>

    <!-- 勤怠 -->
    <div class="archive">
      <div>
        <button type="button" class="btn">勤務開始</button>
      </div>
      <div>
        <button type="button" class="btn">勤務終了</button>
      </div>
      <div>
        <button type="button" class="btn">休憩開始</button>
      </div>
      <div>
        <button type="button" class="btn">休憩終了</button>
      </div>
    </div>

  </section>

    <!-- footer -->
    <footer>
      Atte, inc.
    </footer>

  </body>
</html>
