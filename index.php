<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/theme/template.php');
    $TITLE = "Home";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("Home/home.php", $variables);
?>
        

