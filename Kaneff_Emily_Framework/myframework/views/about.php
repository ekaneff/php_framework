<div class="container">

<h1>About View</h1>

<a href="/about/showAddForm" style="color:black">Show Form</a>

<?php

	foreach($data as $fruit) {

		echo $fruit["name"]."<a href='/about/editForm/".$fruit["id"]."'>Edit</a>"."<a href='/about/delete/".$fruit["id"]."'>Delete</a>"."<br>";
	}
?>

</div>