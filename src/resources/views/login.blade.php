<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                Atte
            </a>
        </div>
    </header>
    <h2 class="h2">ログイン</h2>
<form class="form">
    @csrf
    <form class="form2">
        <input type="email" name="email" placeholder="{{ $stamp['email]'}}" />
    </form>
    <form class="form3">
        <input type="password" name="password" placeholder="{{ $stamp['password']}}" />
    </form>

   <form class="form5">
    <p style="margin-bottom:25px"></p>
    <form class="form" action="/contacts" method="post">
        @csrf
    <button class="form-button-submit" type="submit">ログイン</button>
    </form>

    <p class="content_1">アカウントをお持ちでない方はこちらから</p>
    <form class="form" action="/stamps" method="post">
        @csrf
    <button type="submit">会員登録</button>
    </form>
   </form>
</form>

</body>

</html>