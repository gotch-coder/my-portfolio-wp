<?php
get_header();
?>

<main>

  <h1>Contact</h1>

  <?php
    $token = bin2hex(random_bytes(32));
    $_SESSION['token'] = $token;
    ?>

  <form action="<?php echo get_template_directory_uri(); ?>/page-confirm.php" method="post">

    <p>
      <label>お名前</label><br>
      <input type="text" name="name">
    </p>

    <p>
      <label>メールアドレス</label><br>
      <input type="email" name="email">
    </p>

    <p>
      <label>お問い合わせ内容</label><br>
      <textarea name="message"></textarea>
    </p>

    <button type="submit">確認画面へ</button>

    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token, ENT_QUOTES, 'UTF-8'); ?>">


  </form>

</main>

<?php
get_footer();
?>