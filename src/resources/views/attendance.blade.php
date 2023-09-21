<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/data.css') }}" />
</head>

    <!-- メニュー -->
    <header class="header">
      <h1 class="header-ttl">
        <a href="login.html">Atte</a></h1>
        <nav id="header-nav">
          <ul class="header-nav-list">
            <li class="header-nav-item"><a href="{{ url('index') }}">ホーム</a></li>
            <li class="header-nav-item"><a href="{{ url('attendance') }}">日付一覧</a></li>
            <li class="header-nav-item"><a href="{{ url('login') }}">ログアウト</a></li>
          </ul>
        </nav>
    </header>

    <!-- メインコンテンツ -->
    <section  class="site-width" >

    <!-- 日付 -->
          <div>
            <div class="today">
              <span class="list-item-today"><a href="">&lt;</a></span>
              <span  id="view_today" ></span>
              <span class="list-item-today"><a href="">&gt;</a></span>
            </div>
          </div>

    <!-- 日付(java.script) -->
            <script type="text/javascript">
              document.getElementById("view_today").innerHTML = getToday();

              function getToday() {
                var now = new Date();
                var year = now.getFullYear();
                var mon = now.getMonth() + 1; //１を足すこと
                var day = now.getDate();

                var s = year + "-" + mon + "-" + day ;
                return s;}
            </script>

    <!-- （仮説中）勤怠テーブル -->
    <div class="table">
      <table class="my-parts">
        <tr>
          <th>名前</th>
          <th>勤務開始</th>
          <th>勤務終了</th>
          <th>休憩時間</th>
          <th>勤務時間</th>
        </tr>
      
        <tr>
          <td>テスト太郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:30:00</td>
        </tr>
      
        <tr>
          <td>テスト次郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:30:00</td>
        </tr>
      
        <tr>
          <td>テスト三郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:30:00</td>
        </tr>
      
        <tr>
          <td>テスト四郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:30:00</td>
        </tr>
        
        <tr>
          <td>テスト五郎</td>
          <td>10:00:00</td>
          <td>20:00:00</td>
          <td>00:30:00</td>
          <td>09:30:00</td>
        </tr>
      
      </table>
     </table>
    </div>

    <!-- ページネーション -->
       <div>
        <div class="pagination">
          <ul class="pagination-list">
            <li class="list-item"><a href="">&lt;</a></li>
            <li class="list-item active"><a href="">1</a></li>
            <li class="list-item"><a href="">&gt;</a></li>
          </ul>
        </div>
       </div>



      </section>

    <!-- footer -->
    <footer>
      Atte, inc.
    </footer>

  </body>
</html>