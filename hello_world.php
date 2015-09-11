<?php
	$first_name = "Ken";
	$last_name = "Aonurm";
	echo $first_name." ".$last_name
	
?>
<br>
<?php

	$age = 19;
	
	//kui on väiksem kui 18, siis alakas
	//kui on suurem siis täisealine
	if($age < 18) {
		//tõene
		echo "alakas";
		
	} else {
		//väär
		echo "täisealine";
	}

?>

<br>

<?php

	//nii mitu korda trüki välja "palju", kui palju on vanust

	for($i = 0; $i <$age; $i = $i + 1) {
		
		//see mida korratakse
		echo "palju ";
		
	}
		echo "õnne";

?>

<br>

<?php

	//kuupäev kujul: Friday, 11.09.2015
	echo( date("l, j.m.Y h:i:s") );

?>