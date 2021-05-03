<?php
$site = htmlspecialchars($_POST['site']); 
$email = htmlspecialchars($_POST['email']);
$timestamp = date("H:i:s d-m-Y");//время заявки

$text .= "Сайт: $site "; 
$text .= "Почта: $email ";
$text .= "$timestamp \n";
  if (!empty($site) && !empty($email) && !empty($timestamp)) 
    {
    $file = fopen ("mes.txt", "a+"); 
    fwrite ($file,$text); 
    fclose ($file); 
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=320" />
	<meta name="MobileOptimized" content="width=320" />
	<title>Ďakujeme, Vaša objednávka je akceptovaná!</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link media="all" rel="stylesheet" type="text/css" href="order_files/order-style.css" />

</head>
<body>
	<div id="wrapper">
		<div class="order-block">
			<span class="decoration"></span>
			<div class="text-holder">
				<h2><span>Ďakujeme</span> údaje boli odoslané!</h2>
				<p>Informácie o našich propagačných akciách a zľavách budú zaslané na vašu poštu.</p>
			</div>
			
		</div>
	</div>
</body>
</html>