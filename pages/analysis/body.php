<h1>Analīze</h1>

<h2>TOC</h2>
<p>
	<a href="#intro">Ievads</a><br>
	<a href="#iron">Dzelzs</a>
</p>

<h2 id="intro">Ievads</h2>
<style>
	#periodic-table {
		width: 640px;
		height: 339px;
		position: relative;
	}
</style>

<p>
	<i>ievads...</i>
</p>
<p>
	<?php
		$periodic_table_path = $root_path . "/resources/periodic_table.svg";
		$periodic_table_style_id = "periodic-table";
		$alternative_text = "Periodic table missing";
		echo "<img src='" . $periodic_table_path . "' "
			. "alt='" . $alternative_text . "' "
			. "id='" . $periodic_table_style_id . "'>";
	?>
</p>

<h2 id="iron">Dzelzs</h2>
<p>
	Dzelzs esamību var noteikt ar magnētu.
</p>

<?php
	echo "<a href=" . $root_path . ">Back to main page</a>";
?>