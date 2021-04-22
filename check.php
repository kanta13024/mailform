<?php

if (empty($_POST)){
  echo "処理終了";
  exit;
}
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>練習用フォーム２</title>
</head>
<body>
  <h1>練習用フォーム２（確認画面）</h1>
  <p>内容を確認してください</p>

  <?php
  if (empty($_POST["uname"])){
    echo "お名前を入力してください";
    exit;
  }

  if (empty($_POST["email"])){
    echo "メールアドレスを入力してください";
    exit;
  }

  if(empty($_POST["message"])){
    echo "メッセージを入力してください";
    exit;
  }

  $uname = htmlspecialchars($_POST["uname"], ENT_QUOTES, "UTF-8");
  $email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
  $message = htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8");

  $_SESSION["uname"] = $uname;
  $_SESSION["email"] = $email;
  $_SESSION["message"] = $message;
  ?>
  <form action="submit.php" method="POST">
    <table border="1">
      <tr>
        <td>メールアドレス</td>
        <td><?php echo $email; ?></td>
      </tr>
      <tr>
        <td>お名前</td>
        <td><?php echo $uname; ?></td>
      </tr>
      <tr>
        <td>メッセージ</td>
        <td><?php echo nl2br($message); ?></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="sub1" value="送信する">
        </td>
      </tr>
    </table>
  <input type="hidden" name="uname" value="<?php echo $uname; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="message" value="<?php echo $message; ?>">
  </form>
</body>
</html>