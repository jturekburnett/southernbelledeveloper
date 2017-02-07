<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/SouthernBelleDeveloper/theme/template.php');
    $TITLE = "Blog";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("Blog/blog.php", $variables);
?>
