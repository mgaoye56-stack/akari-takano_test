<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
}

$name = $_POST['name'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$age = $_POST['age'];

$message = $_POST['message'];
$to = "mgaoye56@gmail.com";
$subject = "お問い合わせがありました";
$mailmessage = "
お名前：$name
会社名 : $companyName
メールアドレス : $email
年齢 : $age
お問い合わせ内容 : $message
";
$result = mail($to, $subject, $mailmessage);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 送信完了画面</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>お問い合わせフォーム- 送信完了画面</h1>
    </header>
    <?php
    if ($result) {
        echo "お問い合わせが送信されました。ありがとうございます！";
    } else {
        echo "メールの送信に失敗しました。";
    }
    
    ?>
    <br>
    <input type="button" value="お問い合わせフォームに戻る" onclick="location.href='contact.php'">
</body>
</html>