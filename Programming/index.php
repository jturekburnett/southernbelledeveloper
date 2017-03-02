<!--Programming Page Index-->
<?php
    require_once('../theme/template.php');
    $TITLE = "Programming";
    $variables = array(
        'TITLE' => $TITLE
    );
    renderLayoutWithContentFile("../Programming/programming.php", $variables);
?>