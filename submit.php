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
  <title>練習用フォーム（完了）</title>
</head>
<body>
  <h1>練習用フォーム（完了）</h1>
  <?php
  $uname = htmlspecialchars($_SESSION["uname"], ENT_QUOTES, "UTF-8");
  $email = htmlspecialchars($_SESSION["email"], ENT_QUOTES, "UTF-8");
  $message = htmlspecialchars($_SESSION["message"], ENT_QUOTES, "UTF-8");

  $to = "br13024@shibaura-it.ac.jp";
  $title = "【メールフォームより】";
  $ext_header = "From: {$email}";

  $body = <<<EOM

  【WEBサイトからのメール】

  お名前：{$uname}
  メールアドレス：{$email}
  メッセージ：{$message}

  EOM;


  $rc = mb_send_mail($to, $title, $body, $ext_header);
  if (!$rc) {
    exit;
  } else {
    $_SESSION = NULL;
  }
  ?>

  <p>メールを送信しました。</p>
  <table border="1">
    <tr>
      <td>お名前</td>
      <td><?php echo $uname; ?></td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>メッセージ</td>
      <td><?php echo nl2br($message); ?></td>
    </tr>
  </table>
  
</body>
</html>