<!Photography Page Index-->
<?php
    require_once('../theme/template.php');
    $TITLE = "Photography";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("../Photography/photography.php", $variables);
?>
