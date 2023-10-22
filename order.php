<?php
	if (isset($_POST['name'])){
		require "process.php";
		if ($result =="") { echo "<div>ORDER RECIEVE!</div>";
			// code...
		}
		else {echo "<div>$result</div>";}
	}
	?>