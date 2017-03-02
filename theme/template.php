<?php

function renderLayoutWithContentFile($contentFile, $variables = array()){
    $templatesPath = $_SERVER['DOCUMENT_ROOT'];
    
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
    
    echo "<main>";
    
    if (file_exists($contentFileFullPath)){
        require_once ($contentFileFullPath);
    }
    else{
        
    }
    
    echo "</main>";
    
    include $templatesPath . '/theme/footer.php';
}

?>
