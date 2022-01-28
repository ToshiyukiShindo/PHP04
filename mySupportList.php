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


    try{
        $pdo = connect();
        $mail = $_SESSION['login'];
        $sqlmysup = "SELECT * FROM `user_supports` LEFT JOIN `projects` ON user_supports.project_id = projects.id WHERE `user_email` LIKE :email";
        $statement = $pdo->prepare("$sqlmysup");
        $statement->bindValue(':email',$mail,PDO::PARAM_STR);
        $statement->execute();
        $resultsp = $statement->fetchAll(PDO::FETCH_ASSOC);
        $sqlsum = "SELECT sum(support_amount) FROM `user_supports` LEFT JOIN `projects` ON user_supports.project_id = projects.id WHERE `user_email` LIKE :email2";
        $statement = $pdo->prepare("$sqlmysup");
        $statement->bindValue(':email',$mail,PDO::PARAM_STR);
        $statement->execute();
        $resultsp = $statement->fetchAll(PDO::FETCH_ASSOC);

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
        <h4 class="titletext">My SupportList</h4>
    </div>
    <hr>
    <div class="list">
        <?php foreach($resultsp as $record){ ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $record['imageurl']?>" class="card-img-top" alt="..." style="height: 200px; object-fit:cover;">
            <div class="card-body">
                <h5 class="card-title"><?= $record['title']?></h5>
                <span class="card-text category"><?= $record['category']?></span>
                <div class="card-cul">
                    <p>¥: <?= $record['support_amount']?></p>
                </div>
                <div  class="pjbtn">
                    <form action="projectDetail.php" method="post">
                        <input type="number" name="pid0" value="<?= $record['id']?>" style="display: none;">
                        <input class="btn btn-info btn-sm" type="submit" role="button" value="Detail"></input>
                    </form>
            </div>
        </div>
    </div>
    <?php }?>
    </div>
    </section>

</body>
</html>