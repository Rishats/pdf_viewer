<?php
if( isset($_GET['pdf']) && !empty( $_GET['pdf'] ) ) 
{
	$file = dirname(__FILE__).'/data/content/files/'.$_GET['pdf'];

	if (!file_exists($file)) 
	{
        var_dump($_GET);
        exit ('Такого файла не существует');
    }

	header('Content-Description: File Transfer');
	header('Content-Type: application/pdf');
	header('Content-Disposition: inline; filename="' .basename($file).'"');
	header('Content-Transfer-Encoding: binary');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	ob_clean();
	flush();
	readfile($file);
      
    exit();
}
else
	echo "Ничего не найдено";
?>