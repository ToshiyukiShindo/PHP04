<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../php_04/user.css">
    <script src="https://kit.fontawesome.com/d802cc77db.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="headerleft">
            <p class="maintitle"><a href="userPortal_login.php">G's project Square</a></p>
        </div>
        <div class="headerright">
        <input class="form-control" type="text" placeholder="Any keyword" style="width: 150px;">
        <input class="form-control" type="text" placeholder="Category" style="width: 150px;">
        <input type="button" class="btn btn-outline-info" style="width: 80px;" value="search"></input>
            <!-- ハンバーガーメニュー用 -->
        <div class="open" id="open"><i class="fas fa-bars fa-2x"></i></div>
        <div class="close" id="close"><i class="fas fa-plus fa-2x"></i></div>
        <nav class="hiddenmenu" id="hiddenmenu">
        <ul class="nav__wrapper2">
            <li class="nav__item"><a href="myProjectList.php">プロジェクト作成・編集</a></li>
            <hr style="margin: 2px;">
            <li class="nav__item"><a href="mySupportList.php">サポート一覧</a></li>
            <hr style="margin: 2px;">
            <li class="nav__item"><a href="myLikesList.php">お気に入り一覧</a></li>
            <hr style="margin: 2px;">
            <li class="nav__item"><a href="userLogout.php">Logout</a></li>
        </ul>
        </nav>
    <script src="../php_04/hambergar.js"></script>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>