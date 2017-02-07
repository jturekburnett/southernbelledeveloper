<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/SouthernBelleDeveloper/theme/template.php');
    $TITLE = "Home";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("Home/home.php", $variables);
?>
        

