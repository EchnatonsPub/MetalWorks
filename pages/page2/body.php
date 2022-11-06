<h1>Page 2</h1>

<p>
	Page 2.<br>
	<i>Animation below copy-pasted from a tutorial.</i>
</p>

<style>
	#container {
		width: 400px;
		height: 400px;
		position: relative;
		background: yellow;
	}
	
	#animate {
		width: 50px;
		height: 50px;
		position: absolute;
		background-color: red;
	}
</style>

<p>
	<button onclick="myMove()">Click Me</button>
</p>

<div id ="container">
	<div id ="animate">
	</div>
</div>

<script>
	function myMove() {
		
		const elem = document.getElementById("animate");
		
		
		let id = null;
		clearInterval(id);
		
		
		let pos = 0;
		id = setInterval(frame, 5);
		
		
		
		function frame() {
			if (pos == 350) {
				clearInterval(id);
			} else {
				pos++;
				elem.style.top = pos + "px";
				elem.style.left = pos + "px";
			}
		}
	}
</script>

<?php
	echo "<a href=" . $root_path . ">Back to main page</a>";
?>