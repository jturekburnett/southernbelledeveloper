<?php

function renderLayoutWithContentFile($contentFile, $variables = array()){
    $templatesPath = $_SERVER['DOCUMENT_ROOT'] . '/SouthernBelleDeveloper';
    
    $contentFileFullPath = $templatesPath . "/" . $contentFile;
    
    //each key in the $variables array will become a variable
    if(count($variables) > 0){
        foreach ($variables as $key => $value){
            if (strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    
    require_once($templatesPath . "/theme/header.php");
    include  $templatesPath . '/theme/navbar.php';
    
    if (file_exists($contentFileFullPath)){
        require_once ($contentFileFullPath);
    }
    else{
        
    }
    
    include $templatesPath . '/theme/footer.php';
}

?>
