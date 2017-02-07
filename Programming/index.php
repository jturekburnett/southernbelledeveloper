<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/SouthernBelleDeveloper/theme/template.php');
    $TITLE = "Programming";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("Programming/programming.php", $variables);
?>