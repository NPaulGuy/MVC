<?php
	foreach ($products as $product) {
		echo "<ul>";
		foreach ($product as $key => $field) {
			echo "<li>$key - $field</li>";
		}
		echo "</ul>";
	}
?>