<!DOCTYPE html>
<html>
<body>
<?php
	$tims = ['irsal', 'alip', 'apis', 'faisal'];
	array_unshift($tims, 'raihan', 'andi');
	foreach($tims as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>
