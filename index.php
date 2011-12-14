<?php
$d = dirname(__FILE__);
define('ROOT', $d == '' ? '/' : $d . '/');
if(!file_exists(ROOT . 'core/config.php')) {
    header('Location: install/index.php');
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Wephi</title>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="js/ext/resources/css/ext-all.css" />
        <link href="style/style.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="style/icons.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="style/ext-patch.css" media="screen" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/ext/ext-all.js"></script>
        <script type="text/javascript" src="js/ext/locale/ext-lang-zh_CN.js"></script>
        <script type="text/javascript" src="js/common.js"></script>
        <script type="text/javascript" src="js/etao.js"></script>
        <script type="text/javascript" src="js/graphvizForm.js"></script>
        <script type="text/javascript" src="js/graphvizStore.js"></script>
        <script type="text/javascript" src="js/graphvizWindow.js"></script>
        <script type="text/javascript" src="js/graphvizPanel.js"></script>
    </head>
    <body>
    </body>
</html>
