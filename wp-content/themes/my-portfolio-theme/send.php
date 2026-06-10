<?php
session_start();
?>

echo '<h1 style="color:red">SEND OK</h1>';

echo '
<pre>';
var_dump($_POST);
echo '</pre>';
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