<h1>Kausēšana</h1>
<?php
	include($root_path . "/resources/element-info.php");
	
	function make_simple_link($tag, $name) {
		echo "<a href='#" . $tag . "'>" . $name . "</a><br>";
	}
	
	function make_link($element_number) {
		global $elements;
		$tag = $elements->get($element_number)->tag;
		$name = $elements->get($element_number)->name;
		make_simple_link($tag, $name);
	}
	
	function make_simple_heading($tag, $name) {
		echo "<h2 id='" . $tag . "'>" . $name . "</h2>";
	}
	
	function make_heading($element_number) {
		global $elements;
		$tag = $elements->get($element_number)->tag;
		$name = $elements->get($element_number)->name;
		make_simple_heading($tag, $name);
	}
?>

<h2>TOC</h2>
<p>
	<?php
		make_link(13);
		make_simple_link("bbb", "bbb");
	?>
</p>

<?php
	make_heading(13);
?>
<p>
	Alumīnijs kūst pie 660.32 °C.
</p>

<?php
	make_simple_heading("bbb", "bbb");
?>
<p>
	<i>coming soon...</i>
</p>

<?php
	echo "<a href=" . $root_path . ">Back to main page</a>";
?>