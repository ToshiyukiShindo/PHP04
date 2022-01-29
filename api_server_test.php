<?php



function getvalue(){
    
    function connect(){
        $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
        return $pdo;}
    
        try{
            $pdo = connect();
            $mail = $_GET['email'];
                $statement = $pdo->prepare('SELECT * FROM `projects` LEFT JOIN (SELECT `project_id`, sum(support_amount), count(user_email) FROM `user_supports` GROUP BY `project_id`) AS `pjsum` ON projects.id = pjsum.project_id WHERE `owner` LIKE :email');
                $statement->bindValue(':email',$mail,PDO::PARAM_STR);
                $statement->execute();
                $resultpj = $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            // echo "Itemsデータの取得に失敗しました。";
        }

        $culc = $resultpj;
        // $culc = 1+1;
        $response = [
        'status' => 'success',
        'value' => $_GET['email'],
        'result' => $culc
    ];
    return $response;
}

switch (strtolower($_SERVER['REQUEST_METHOD'])){
    case 'get':
        echo json_encode(getvalue());
        break;
    case 'post':
        echo json_encode(getvalue());
        break;
}
?>