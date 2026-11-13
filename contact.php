<!DOCTYPE html>
<html  lang="ja">
<head>
    <meta charset = "UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h2>お問い合わせフォーム</h2>
    </header>
    <div class="content-area">
        <nav>
            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">人気投稿</a></li>
                <li><a href="#">エンジニアおすすめ商品</a></li>
                <li><a href="#">エンジニアおすすめ記事</a></li>
                <li><a href="#">投稿ページ</a></li>
            </ul>
        </nav>
    <form method="POST" action="confirm.php" id="contactForm">
    <table>
        <tr>
            <th>お名前</th>
            <td><input type="text" name="name" id="name" size="40"></td>
        </tr>
        <tr>
            <th>会社名</th>
            <td><input type="text" name="companyName" id="companyName" size="40"></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><input type="text" name="email" id="email" size="40"></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><input type="text" name="age" id="age" size="40"></td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td><textarea placeholder="お問い合わせ内容" name="message" id="message" cols="45" rows="5"></textarea></td>
        </tr>
    </table>

        <div class = "button-area">
        <input type="submit" value="送信">
        </div>
    </form>
    </div>

<footer>
    <div class ="button-area">
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
    <input type="button" id="changeColorButton" value="押してみてね！">
    </div>
</footer>
<script src="style.js"></script>
</body> 
</html>

