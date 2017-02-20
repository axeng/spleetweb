<?php

	$buttons = array();
	$buttons[] = new Button("LE PROJET", "project.php");
	$buttons[] = new Button("NEWS", "news.php");
	$buttons[] = new Button("TELECHARGEMENTS", "download.php");
	$buttons[] = new Button("BIBLIOGRAPHIE", "source.php");
?>
<table align="center">
	<tr>
		<?php 
			foreach ($buttons as $button) {
				if ($button->getLink() != basename($_SERVER['PHP_SELF'])) {
					$button->toHtml();
				}
			}
		?>
	</tr>
</table>