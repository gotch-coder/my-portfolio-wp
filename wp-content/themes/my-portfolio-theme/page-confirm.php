<?php


get_header();



// フォーム値を取得
$token = $_POST['token'] ?? '';
$name = $_POST['contact_name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

$errors = [];

if ($name === '') {
$errors['name'] = 'お名前を入力してください';
}

if ($email === '') {
$errors['email'] = 'メールアドレスを入力してください';
}

if ($message === '') {
$errors['message'] = 'お問い合わせ内容を入力してください';
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
$errors['email'] = '正しいメール形式で入力してください';
}
?>



<main class="confirm">
  <div class="inner">
    <h1 class="confirm-title">確認画面</h1>


    <!-- ここがエラー表示 -->
    <?php if (!empty($errors)): ?>

    <ul>

      <?php foreach ($errors as $error): ?>

      <li>
        <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
      </li>

      <?php endforeach; ?>

    </ul>

    <!-- ↓ これを追加 -->
    <form action="<?php echo home_url('/contact/'); ?>" method="post">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($token,   ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="name" value="<?php echo htmlspecialchars($name,    ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="email" value="<?php echo htmlspecialchars($email,   ENT_QUOTES, 'UTF-8'); ?>">
      <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">
      <button type="submit">入力画面へ戻る</button>
    </form>



    <?php endif; ?>

    <!-- エラーがない時だけ表示 -->
    <?php if (empty($errors)): ?>

    <table class="confirm-table">
      <tr>
        <th>お名前</th>
        <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></td>
      </tr>
    </table>



    <div class="confirm-btns">

      <!-- 戻る -->
      <form action="<?php echo home_url('/contact/'); ?>" method="post">

        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="contact_name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit" class="contact__btn">戻る</button>
      </form>

      <!-- 送信 -->
      <form action="<?php echo get_template_directory_uri(); ?>/send.php" method="post">

        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="contact_name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">

        <button type="submit" name="send" class="contact__btn">
          送信する
        </button>

      </form>

    </div>


    <?php endif; ?>

  </div>
</main>



<?php get_footer(); ?>