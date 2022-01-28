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
        <h4 class="titletext">My LikesList</h4>
    </div>
    <hr>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">tags</p>
                <a href="projectDetail.php" class="card-link">Go details</a>
                <div class="card-cul">
                    <p>現在総計：xxxxxxxxxx</p>
                    <p>サポーター数：</p>
                    <p>Likes：</p>
                </div>
            </div>
        </div>
    </section>

</body>
</html>