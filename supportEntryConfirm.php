<?php require_once('userLayout_login.php'); ?>
<?php
$pid = $_POST['pid'];
$stitle = $_POST['stitle'];
$starget = $_POST['starget'];
$simg = $_FILES['smimg']['name'];
$sdes = $_POST['sdescription'];
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

<div class="title">
        <h4 class="titletext">SupportEntry Confirmation</h4>
    </div>
    <hr>
<form class="userentry" action="supportEntryClose.php" method="post">
<table class="table table-hover" style="width: 60vw;">
        <thead>
        <tr>
            <th>項目</th>
            <th>内容</th>
        </tr>
    </thead>
    <form action="supportEntryClose.php" method="post">
        <tbody>
        <tr>
            <td><p>ProjectId</p></td>
            <td><input name="spid" type="number" value="<?= $pid ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>タイトル</p></td>
            <td><input name="sctitle" type="text" value="<?= $stitle ?>" style="border:none; background-color: rgb(248 250 252);width: 25vw;"></input></td>
        </tr>
        <tr>
            <td><p>サポート金額</p></td>
            <td><input name="scamount" type="text" value="<?= $starget ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>メイン画像</p></td>
            <td><input name="scimg" type="text" value="/php_04/asset/<?= $simg ?>" style="border:none; background-color: rgb(248 250 252);width: 25vw;"></input></td>
        </tr>
        <tr>
            <td><p>Description</p></td>
            <td><textarea name="scdes" style="border:none; background-color: rgb(248 250 252);width: 25vw;"><?= $sdes ?></textarea></td>
        </tr>
        </tbody>
    </table>
<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Confirm"></input>
</form>
</section>

</body>
</html>