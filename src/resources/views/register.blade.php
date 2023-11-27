<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                Atte
            </a>
        </div>
    </header>
    <h2 class="h2">会員登録</h2>
@section('title', 'add.blade.php')

@section('content')
@if (count($errors) > 0)
<p>入力に問題があります</P>
@endif
<fome class="form" action="/registeredUsers/login" method="post">
    @csrf

    @if ($errors->has('name'))
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            {{$errors->first('name')}}
        </td>
    </tr>
    @endif

    <form class="form1">
        <input type="text" name="name" placeholder="お名前" />
    </form>

    @if ($errors->has('email'))
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            {{$errors->first('email')}}
        </td>
    </tr>
    @endif

    <form class="form2">
        <input type="email" name="email" placeholder="メールアドレス" />
    </form>

    @if ($errors->has('password'))
    <tr>
        <th style="background-color: red">ERROR</th>
        <td>
            {{$errors->first('password')}}
        </td>
    </tr>
    @endif

    <form class="form3">
        <input type="password" name="password" placeholder="パスワード" />
    </form>
    <form class="form4">
        <input type="password" name="password" placeholder="確認用パスワード" />
    </form>
</form>

   <form class="form5">
    <p style="margin-bottom:25px"></p>
    <button class="form-button-submit" type="submit">会員登録</button>

    <p class="content_1">アカウントをお持ちの方はこちらから</p>
    <form class="form" action="/registers/login" method="post">
        @csrf
    <button type="submit">ログイン</button>
    </form>
   </form>
   

</body>

</html>