<?php require_once('userLayout_login.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    return $pdo;
} 
?>

<!-- ログイン情報の取得 -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    $message = "";}
else {
    $message = $_SESSION['login']."さん、ようこそ！";
    }
$message = htmlspecialchars($message);

try{
    $pdo = connect();
    $mail = $_SESSION['login'];
        $statement = $pdo->prepare('SELECT * FROM `projects` WHERE `owner` LIKE :email'); //WHERE delete_flag ==0 で削除フラグを有効にできる
        $statement->bindValue(':email',$mail,PDO::PARAM_STR);
        $statement->execute();
        $resultpj = $statement->fetchAll(PDO::FETCH_ASSOC);
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
<section class="container2">
<p style="font-size: 20px;font-weight: bold;margin: 5px 0 0 5px"><?= $message ?></p>
    <div class="title">
        <h4 class="titletext">My Projects</h4>
        <a class="btn btn-info" href="projectEntry.php" role="button" style="text-align: center; height: 35px;">Create</a>
    </div>
    <hr>
    <div class="list">
        <?php foreach($resultpj as $record){ ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= $record['imageurl']?>" class="card-img-top" alt="..." style="height: 200px; object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title"><?= $record['title']?></h5>
                    <p class="card-text"><?= $record['category']?></p>
                    <p class="card-text"><?= $record['goal']?></p>
                    <div  class="pjbtn">
                        <a class="btn btn-info btn-sm" href="userprojectDetail.php" role="button">Detail</a>
                        <form action="projectEdit.php" method="post">
                            <input type="number" name="pid" value="<?= $record['id']?>" style="display: none;">
                            <input type="submit" class="btn btn-info btn-sm" role="button" value="Edit"></input>
                        </form>
                        <form action="supportEntry.php" method="post">
                            <input type="number" name="pid2" value="<?= $record['id']?>" style="display: none;">
                            <input type="submit" class="btn btn-info btn-sm" role="button" value="SupportEntry"></input>
                        </form>
                    </div>
                    <div class="card-cul">
                        <p>現在総計：xxxxxxxxxx</p>
                        <p>サポーター数：</p>
                        <p>Likes：</p>
                    </div>
                        <input type="number" name="pid3" value="<?= $record['id']?>" style="display: none;">
                        <button class="btn btn-secondary btn-sm" type="submit" style="margin-top: 15px;" id="delete">Delete</button>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- delete確認モーダル -->
        <div id="mask" class="mask"></div>
        <div class="test" id="test">
            <p style="font-weight: bold;">このプロジェクトを削除します。</p>
            <p style="font-weight: bold; padding-bottom: 20px;">よろしいですか？</p>
            <p><?= "Id: ".$_POST['pid3']?></p>
            <p><?= "Title: ".$_POST['ptitle3']?></p>
            <div class="btn4" style="margin-top: 30px;">
                <form action="projectDelete.php" method="post">
                    <input type="number" name="pid3" value="<?= $_POST['pid3']?>" style="display: none;">
                    <input type="submit" class="btn btn-danger" role="button" value="Delete"></input>
                </form>
                <button type="button" class="btn btn-info" id="cancel">cancel</button>
            </div>
        </div>
    </section>
<script src="../php_04/modal.js"></script>
</body>
</html>