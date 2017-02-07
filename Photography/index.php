<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/SouthernBelleDeveloper/theme/template.php');
    $TITLE = "Photography";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("Photography/photography.php", $variables);
?>
