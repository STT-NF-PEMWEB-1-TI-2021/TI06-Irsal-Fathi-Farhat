<!DOCTYPE html>
<html>
<body>
<?php
	$tims = ['irsal', 'alip', 'apis', 'faisal'];
	array_shift($tims);
	foreach($tims as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>
