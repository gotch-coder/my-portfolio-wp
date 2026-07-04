<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/portfolio-wp/wp-load.php');

if (session_status() === PHP_SESSION_NONE) {
session_start();
}

// POSTデータの取得
$name = $_POST['contact_name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';
$token = $_POST['token'] ?? '';

// トークン検証
if (!isset($_SESSION['token']) || $token !== $_SESSION['token']) {
    die('不正なアクセスです。');
}

// メール送信
$to = get_option('admin_email');
$subject = 'お問い合わせがありました';
$body = "お名前: {$name}\nメールアドレス: {$email}\n\nお問い合わせ内容:\n{$message}";
$headers = ['Content-Type: text/plain; charset=UTF-8'];

$sent = wp_mail($to, $subject, $body, $headers);

// 使用済みトークンを破棄(再送信防止)
unset($_SESSION['token']);

// デバッグ用(動作確認できたら消してOK)
if (!$sent) {
    echo '<p style="color:red">メール送信に失敗しました。</p>';
} else {
    echo '<p style="color:green">メール送信に成功しました。</p>';
}
?>







<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>送信完了</title>
</head>

<body>

  <h1>送信完了</h1>

  <p>
    お問い合わせありがとうございました。<br>
    内容を送信しました。
  </p>

  <p>
    <a href="<?php echo home_url('/'); ?>">
      トップページへ戻る
    </a>
  </p>

</body>

</html>