<?php
    require_once '課題５−７−４.php';
    require_once '課題５−７−６.php';

    session_chk();

    $get_data = array();

    if(!empty($_POST['name'])){
        $get_data['name'] = $_POST['name'];
    }
    if(!empty($_POST['main'])){
        $get_data['main'] = $_POST['main'];
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title><?php echo SHOW ?></title>
</head>
<body>
    <h1>投稿結果</h1>
    <?php
    if(!isset($get_data['name']) || !isset($get_data['main']))
    {
        echo '入力データが不十分です。もう一度入力を行ってください。';
    }else{
        echo $get_data['name'].'さんの投稿'.'<br>';
        echo post($get_data['main']);
    }
    ?>
</body>
</html>
