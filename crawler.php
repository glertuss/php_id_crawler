<?php
$filename = 'good.txt';
while(true){
	$rn = "0123456789";
	$id = substr(str_shuffle($rn),0,8);
	echo $id;
	echo "\n";
	
	
	
	$homepage = file_get_contents('http://194.87.218.32/stat.php?id=31425527');
	echo "200 OK\n";
	$ned = 'Run';
	$pos = strripos($homepage, $ned);
	if($pos === false)
	{		
	echo "DOWP \n";
	}else
	{
	if (is_writable($filename)) {

   
    if (!$fp = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }


    if (fwrite($fp, $homepage) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }

   

    fclose($fp);

} else {
    echo "Файл $filename недоступен для записи";
}
	echo'yyyyyyyyaaaaaaaaaaayyyyyyy';
	}
}
?>