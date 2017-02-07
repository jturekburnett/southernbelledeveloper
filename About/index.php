<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/SouthernBelleDeveloper/theme/template.php');
    $TITLE = "About";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("About/about.php", $variables);
?>

