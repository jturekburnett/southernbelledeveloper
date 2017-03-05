<!--Home Index-->
<?php
    require_once('./theme/template.php');
    $TITLE = "Home";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("Home/home.php", $variables);
?>
        

