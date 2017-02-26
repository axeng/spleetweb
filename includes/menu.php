<?php

	$buttons = array();
	$buttons[] = new Button("LE PROJET", "project.php");
	$buttons[] = new Button("NEWS", "news.php");
	$buttons[] = new Button("TELECHARGEMENTS", "download.php");
	$buttons[] = new Button("BIBLIOGRAPHIE", "source.php");
?>
<table align="center" class="menuTable">
	<tr>
		<?php 
			foreach ($buttons as $button) {
				$button->toHtml($button->getLink() == basename($_SERVER['PHP_SELF']));
			}
		?>
	</tr>
</table>