<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<?php include"styles/style.php"; ?>
		<title>News</title>
	</head>
	<body>
		<?php include "includes/header.php"; ?>
		<?php

			$news = array();

			try {

				if ($handle = opendir('news')) {

					//loop for all the files in the folder news
				    while (false !== ($fileName = readdir($handle))) {

				    	//check if the extension of the file is .news with a regex
				    	if (preg_match("#\.news$#", $fileName)){
				    		//open file
				    		$file = fopen("news/".$fileName, "r");
				    		$new = new News();

				    		$balise = "";

				    		//loop in all the line of the file
				    		while (!feof($file)){

				    			$line = fgets($file);

				    			//if its a enter balise <...>
				    			if (preg_match("#^<[^/].*>$#", $line))
				    			{
				    				$balise = str_replace("<", "", $line);
				    				$balise = str_replace(">", "", $balise);
				    				$balise = str_replace("\n", "", $balise);
				    			}
				    			//if its a exit balise </...>
				    			elseif (preg_match("#^<[/].*>$#", $line)) 
				    			{
				    				$balise = "";
				    			}
				    			else 
				    			{
				    				switch ($balise) {
				    					case "HEADER":
				    						$args = explode(" = ", $line, 2);
			    							$new->hydrate([
			    									$args[0] => $args[1]
			    								]);
				    						break;

				    					case "TEXT":
				    						$text = $new->getText().$line;
			    							$new->setText($text);
				    						break;
				    				}

				    			}
				    		}

				    		//close file
				    		fclose($file);
				    		$news[] = $new;
				    	}
				    }
				    closedir($handle);
				}

			} catch (Exception $e) {
				print 'Exception : '.  $e->getMessage(). "<br />";
			}
			echo "<br />";
			echo "<br />";
			foreach ($news as $n) {
				$n->getTable();
			}
		?>
	</body>
</html>