<?php>
$text = $_POST["text1"];
if($text != null){
	echo("Empfangener Text: ".$text);
	$logfile = fopen("logfile.txt", "a");
	$date = date("d.m.Y H:i:s");
	fwrite($logfile, $date."	Text:".$text."\n");
	fclose($logfile);
} else{
echo("Kein Text empfangen.");
}
?>