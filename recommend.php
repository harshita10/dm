<?php
$tags=array();
$handle = fopen("associationRules.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
		//echo $line;
		
		$delimiter = ",";
		$splitcontents = explode($delimiter, $line);
		foreach($splitcontents as $k=>$v){
			if(!in_array($v,$tags))
				array_push($tags,$v);
		}
		$result=array_diff($splitcontents, $tags);
		//print_r($result);
		/*
		if(in_array($real1, $tags)){
			array_push($a,$real1);
		}			
		if(in_array($real2, $tags)){
			array_push($a,$real2);
		}*/
		
	
}	    
    fclose($handle);
} 
//print_r($tags);

$CSVfp = fopen("dmmini.csv", "r");
		if($CSVfp !== FALSE) 
		{
		while(! feof($CSVfp)) {
		$data = fgetcsv($CSVfp, 1000, ",");
		foreach($tags as $hel)
		if($data[3]==$hel)
		{
		?>		<html>
					<head>
					<style>
						table{
						width:500px;
						border: #CCCCCC 1px solid;
						background-color: #555555;
						color:#FFFFFF;
						font-family: "Century Gothic",CenturyGothic,AppleGothic,sans-serif;
						}
						td{
						padding: 5px;
						}
						tr.data {
						background-color: #FAFFFF;
						color:#000000;
						}
					</style>
					</head>
					<body>   
				<table cellspacing="1">
					<tr>
					<td align="center">NAME</td>
					<td align="center">COLOR</td>
					</tr>
					<tr class="data">
					<td align="center"><?php echo $data[0]; ?></td>
					<td align="center"><?php echo $data[1]; ?></td>
					<td align="center"><?php echo $data[2]; ?></td>
					<td align="center"><?php echo $data[3]; ?></td>
					<td align="center"><?php echo $data[4]; ?></td>
					<td align="center"><?php echo $data[5]; ?></td>
					<td align="center"><?php echo $data[6]; ?></td>
					<td align="center"><?php echo $data[7]; ?></td>
					<td align="center"><?php echo $data[8]; ?></td>
					<td align="center"><?php echo $data[9]; ?></td>
					<td align="center"><?php echo $data[10]; ?></td>
					</tr>
					</table>


		            </body></html>
		          
		
		
		<?php
		}
		}
		}

/*

$assr = fopen("associationRules.txt", "r");
		if($assr !== FALSE) 
		{
			while(!feof($assr))
				{
					$d = fgets($assr,100);
					$delimiter = ",";
$splitcontents = explode($delimiter, $d);
		         foreach($splitcontents as $hell) {
    echo $hell;
	echo count($hell);
}
		}}
		fclose($assr);*/
/*
$pollids  = "associationRules.txt";
$contents = file_get_contents($pollids);
$pollfields = explode(',', $contents);
echo "out";

echo $pollfields[0]; // Prints the value in first "cell"
echo $pollfields[1]; // The second
echo $pollfields[2];*/
/*foreach($pollfields as $field) {
    echo $field;
	echo "hi";
}*/
$filename="associationRules.txt";
$fd = fopen ($filename, "r");
$contents = fread ($fd,filesize ($filename));
fclose ($fd); 
$delimiter = ",";
$splitcontents = explode($delimiter, $contents);
?>

