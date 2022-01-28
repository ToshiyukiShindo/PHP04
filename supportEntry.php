<?php require_once('userLayout_login.php'); ?>
<?php $pid = $_POST['pid2']; ?>
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
        <h4 class="titletext">SupportItems Entry</h4>
    </div>
    <hr>
<form class="userentry" action="supportEntryConfirm.php" method="post" enctype="multipart/form-data" >
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">ProjectId</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="pid" value="<?= $pid ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">タイトル</label>
    <input type="text" class="form-control" id="exampleFormControlInput2" name="stitle">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">サポート金額</label>
    <input type="number" class="form-control" id="exampleFormControlInput3" name="starget">
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">メイン画像</label>
    <input class="form-control" type="file" id="formFile" name="smimg">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="sdescription" rows="4"></textarea>
</div>


<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Entry"></input>
</form>
</section>

</body>
</html>