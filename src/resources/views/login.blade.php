<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

    <!-- メニュー -->
    <header class="header">
      <h1 class="header-ttl">
        <a href="login.html">Atte</a></h1>
    </header>

    <!-- メインコンテンツ -->
  <section>
  <div class="contact-form__content">
    <div class="contact-form__heading">
      <h2>ログイン</h2>
    </div>
    <form class="form" >

    <!--//メールアドレス//-->
      <div class="form__group">
        <div class="">
          <div class="form__input--text">
            <input type="email" name="email" placeholder="メールアドレス" />
          </div>
          <div class="form__error">
            <!--バリデーション機能を実装したら記述します。-->
          </div>
        </div>
      </div>

    <!---//パスワード//--->
            <div class="form__group">
              <div class="">
                <div class="form__input--text">
                  <input type="text" name="password" placeholder="パスワード" />
                </div>
                <div class="form__error">
                  <!--バリデーション機能を実装したら記述します。-->
                </div>
              </div>
            </div>

      <div class="form__group">
        <button class="submit" type="submit">ログイン</button>
      </div>
    </form>

    <div class="contact-form__under">
      <h3>アカウントをお持ちでない方はこちらから</h3>
      <a href="{{ url('register') }}">会員登録</a>
    </div>
  </div>
  <a style="color: blue; font-size: 25px;" href="{{ url('index') }}">管理者 ログイン</a>
  </section>

    <!-- footer -->
    <footer>
      Atte, inc.
    </footer>

  </body>
</html>
