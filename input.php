<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム練習様</title>
</head>

<body>
    <h1>練習用ホーム</h1>
    <p>必要事項を入力して「確認する」ボタンをクリックしてください</p>
    <form method="POST" action="check.php">
        <table border="1">
            <tr>
                <td>お名前</td>
                <td><input type="text" name="uname" size="30"></td>
            </tr>
            <tr>
                <td>メールアドレス</td>
                <td><input type="text" name="email" size="30"></td>
            </tr>
            <tr>
                <td>メッセージ</td>
                <td><textarea name="message" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="sub1" value="確認する"></td>
            </tr>
        </table>
    </form>


</body>

</html>