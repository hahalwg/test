<?php
ob_start();
echo "
	this is ob study !
";
$content = ob_get_contents();
ob_clean();
$path = "./a/b/c/";
if(!is_dir($path)){
    $dir = mkdir($path,"755",true);
    if($dir){
        $fd = fopen($path."study.html","w");
        if(!$fd){
            echo "error";
        }else{
            fwrite($fd,$content);
            fclose($fd);
        }
    }
}


