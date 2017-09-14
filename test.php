<?php 
echo $_SERVER['REMOTE_ADDR'];

die('innnnnn');
$file = 'C:/Users/vgreddy.MGT/Desktop/straiton-struggle-2017.gpx';

$file = json_decode( json_encode($file) , 1);
if (file_exists($file)) {
    //$xml = simplexml_load_file($file);
	//$file = json_decode( json_encode($file) , 1);
    if(!$xml = json_decode( json_encode(simplexml_load_file($file)) , 1))
	exit('Failed to open - file format not supported-  '.$file);
	print_r($xml);
} else {
    exit('File path not correct '.$file);
} 

/*
if (file_exists($file)) {
   
	if(!$xml = simplexml_load_file($file)){
	exit('Failed to open - file format not supported-  '.$file);
	//print_r($xml);
	}else{
	foreach ($xml->trk->trkseg->trkpt as $pt) {
	     $lat = (string) $pt['lat'];
	     $lon = (string) $pt['lon'];
	     $ele = (string) $pt->ele;
	  echo "lat--- ".$lat." lon---- ".$lon." ele---" .$ele."<br>";
	 // echo   $name = (string) $pt->name;
	}
	}
} else {
    exit('File path not correct '.$file);
}

*/


die();

echo json_encode(array('success'=>1));
exit;


	echo date('Y/M/D H:i:s');
	echo gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "<br>";
echo "Total:".number_format((129.00*20/100),2); 
echo "<br>";
$string = 'abcdefghij';
echo $length = strlen($string);

for ($i=($length-1) ; $i >= 0 ; $i--) {
  echo $string[$i];
}
//php dnekeeW

echo "<br>";	

$string = 'abc1234';
//print_r(str_split($string));
echo $reverted = implode(array_reverse(str_split($string)));
echo "<br>str_rev:  ".strrev($string);
echo "<br>NEXT--- ";
$rev = array("venugopal");
$new_name='';
    foreach ($rev as $key=>$name)
     {
       // echo $name[count($rev)-1];
		$new_name = $name;
       
    }
echo $new_name;

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eq demo</title>
  <style>
  div {
    width: 60px;
    height: 60px;
    margin: 10px;
    float: left;
    border: 2px solid blue;
  }
  .blue {
    background: blue;
  }.red {
    background: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
<div></div>
 
<script>
$( "body" ).find( "div" ).eq( 1 ).addClass( "blue" );

</script>
 
</body>
</html>