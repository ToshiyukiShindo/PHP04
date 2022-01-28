<?php require_once('userLayout_login.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    return $pdo;
}
?>
<?php
try{
    $did = $_POST['pid3'];
    $pdo = connect();
    $statement = $pdo->prepare('DELETE FROM `projects` WHERE `id` LIKE :id');
    $statement->bindValue(':id',$did,PDO::PARAM_INT);
    $statement->execute();
} catch (PDOException $e){
    // echo "Itemsデータの取得に失敗しました。";
}
$message = htmlspecialchars($message);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="container">
        <p>プロジェクトを削除しました。</p>
        <p>また次のプロジェクトに進んでいきましょう！</p>
        <div><a class="btn btn-info btn-sm" href="myProjectList.php" role="button" style="height: 2rem; width: 100px;">MyProject </a></div>
    </section>
</body>
</html>