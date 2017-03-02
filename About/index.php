<!About Page Index-->
<?php
    require_once('../theme/template.php');
    $TITLE = "About";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("About/about.php", $variables);
?>

