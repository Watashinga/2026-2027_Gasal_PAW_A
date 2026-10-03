<?php 
$matkul = ["PTI","ALPRO","DPW","STRUKDAT","JARKOM","PAW","PSBF","RPL"];
for each ($matkul as $mk){
	switch ($mk) {
		case "PTI":
			echo "Sayasuka" . $mk . "<br>";
			break;
		case "ALPRO":
			echo "SayasukaAlpro" . $mk . "<br>";
			break;
		case "DPW":
			echo "SayasukaDPW" . $mk . "<br>";
			break;		
		case "STRUKDAT":
			echo "SayasukaSTRUKDAT" . $mk . "<br>";
			break;
		case "JARKOM":
			echo "SayasukaJARKOM" . $mk . "<br>";
			break;
		case "PAW":
			echo "SayasukaPAW" . $mk . "<br>";
			break;
		default;
			echo "Sayatidakmengambilmatkul" . $mk . "<br>";
			break;
	}
}
?>