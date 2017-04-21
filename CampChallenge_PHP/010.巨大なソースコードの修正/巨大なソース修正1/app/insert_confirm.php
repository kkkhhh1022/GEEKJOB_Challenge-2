<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>登録確認画面</title>
</head>
  <body>
    <?php
    // 各フォームの情報が入っている場合はその情報を、入ってない場合は入ってないフォーム名を格納
    !empty($_POST['name']) ? $post_name=$_POST['name'] : $msg_name='名前';
    ($_POST['year'] != "----") && ($_POST['month'] != "--") && ($_POST['day'] != "--") ? $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']) : $msg_birthday='生年月日';
    !empty($_POST['type']) ? $post_type=$_POST['type'] : $msg_type='種別';
    !empty($_POST['tell']) ? $post_tell=$_POST['tell'] : $msg_tell='電話番号';
    !empty($_POST['comment']) ? $post_comment = $_POST['comment'] : $msg_comment='自己紹介文';
    $arr_msg = array($msg_name,$msg_birthday,$msg_type,$msg_tell,$msg_comment);

        session_start();
        $_SESSION['name'] = $post_name;
        $_SESSION['birthday'] = $post_birthday;
        $_SESSION['type'] = $post_type;
        $_SESSION['tell'] = $post_tell;
        $_SESSION['comment'] = $post_comment;

        if ($_POST['year'] != "----") {$_SESSION['year'] = $_POST['year'];}
        if ($_POST['month'] != "--") {$_SESSION['month'] = $_POST['month'];}
        if ($_POST['day'] != "--") {$_SESSION['day'] = $_POST['day'];}

        // すべてのフォームの情報が入っている場合は登録確認へ、1つでも入っていない場合はどのフォーム入っていないのかを表示
        if (isset($post_name) && isset($post_birthday) && isset($post_type) && isset($post_tell) && isset($post_comment))
        {
    ?>
        <h1>登録確認画面</h1><br>
        名前:<?php echo $post_name;?><br>
        生年月日:<?php echo $post_birthday;?><br>
        種別:<?php echo $post_type?><br>
        電話番号:<?php echo $post_tell;?><br>
        自己紹介:<?php echo $post_comment;?><br>

        上記の内容で登録します。よろしいですか？

        <form action="<?php echo INSERT_RESULT ?>" method="POST">
          <input type="hidden" name="check" value="check">
          <input type="submit" name="yes" value="はい">
        </form>
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>

    <?php }else{ ?>
        <h1>入力項目が不完全です</h1><br>
        <?php foreach($arr_msg as $value) {
            if (!isset($value)) {
                continue;
            } else {
                echo "<h3>・{$value}が入力されていません。</h3>";
            }
        } ?>
        再度入力を行ってください
        <form action="<?php echo INSERT ?>" method="POST">
            <input type="submit" name="no" value="登録画面に戻る">
        </form>
    <?php }?>

    <br>
    <?php
    echo return_top();
    ?>
</body>
</html>
