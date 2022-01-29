<?php declare(strict_types=1);?>
<body>
    <?php
    $params = [
        'email' => 'hiroyukishindo@test.com'
    ];
    $url = 'http://localhost/php_04/api_server_test.php?'.http_build_query($params);
    $handle = curl_init($url);
    // curl_setopt($handle,CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = json_decode(curl_exec($handle), true);
    curl_close($handle);
?>

<p>hiroyukishindo@test.comさんのプロジェクトはこちら</p>
<p><?= $url ?></p>
<pre><?php print_r($apiResponse); ?></pre>

</body>