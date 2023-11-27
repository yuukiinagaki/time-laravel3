<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stamp.css" />
</head>

<body>
    <header>
        <h1>Atte</h1>
        <nav>
            <ul>
                <P style="margin-right:300px"></P>
                <li><a href="#">ホーム</a></li>
                <P style="margin-right:50px"></P>
                <li><a href="#">日付一覧</a></li>
                <P style="margin-right:50px"></P>
                <li><a href="#">ログアウト</a></li>
            </ul>
        </nav>
    </header>
<p>福場凛太朗さんお疲れ様です！</p>

<form class="form">
    @csrf
    <form class="form1" action="/stamp/login" method="post">
        @csrf
    <button class="startwork" type="submit">勤務開始</button>
    

    <button class="endwork" type="submit">勤務終了</button>
    </form>

    <p style="margin-bottom:15px"></p>

    <button class="startbreak" type="submit">休憩開始</button>

    <button class="endbreak" type="submit">休憩終了</button>


</form>


</body>

</html>