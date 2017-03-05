<?php

function renderLayoutWithContentFile($contentFile, $variables = array()){
    
    
    $contentFileFullPath = $contentFile;
    
    //each key in the $variables array will become a variable
    if(count($variables) > 0){
        foreach ($variables as $key => $value){
            if (strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    
    require_once("header.php");
    include  'navbar.php';
    
    echo "<main>";
    if (file_exists($contentFileFullPath)){
        require_once ($contentFileFullPath);
    }
    else{
        
    }
    
    echo "</main>";
    
    include 'footer.php';
}

?>
