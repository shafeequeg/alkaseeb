<?php $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';


// Get the domain
$host = $_SERVER['HTTP_HOST'];

// Combine the protocol, domain, and optional port number
//$rootUrl = $protocol . '://' . $host;
$rootUrl = 'http://localhost/designs/alkaaseb-fixes-ramshid';

// You can also include the port number if it's not the default (80 for http, 443 for https)
//if ($_SERVER['SERVER_PORT'] !== '80' && $_SERVER['SERVER_PORT'] !== '443') {
//    $rootUrl .= ':' . $_SERVER['SERVER_PORT'];
//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ALKAASEB | <?= $PAGE_TITLE;?></title>
    <!-- Stylesheets -->
    <link href="<?=$rootUrl;?>/common/css/bootstrap.css" rel="stylesheet">
    <link href="<?=$rootUrl;?>/common/css/main.css" rel="stylesheet">
    <link href="<?=$rootUrl;?>/common/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=$rootUrl;?>/common/images/logo/logo.png" type="image/x-icon">
    <link rel="icon" href="<?=$rootUrl;?>/common/images/logo/logo.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    
</head>

<body>