			<?php
			 
			
if(isset($_POST['submit'])){

if (empty($snacks)){
				 header('LOCATION: input.php');
			     	}	
$snacks = $_POST['Color'];	
// Note that $snacks will be an array.
foreach ($snacks as $s) {
  echo "$s<br />";
}


$fp=fopen("test.txt","a");
$prefix = $fruitList = '';
foreach ($snacks as $key => $value)
{
    $fruitList = $prefix . '' . $value . '';
    $prefix = ', ';
    fwrite($fp,$fruitList);
	 //join(", ",$fruitlist);
}
fwrite($fp,"\n");
fclose($fp);
}
?>



<!DOCTYPE HTML>  
<html>
<head>
<style>
select {
background-repeat:no-repeat;
background-position:300px;
width:353px;
height:500px;
padding:12px;
margin-top:8px;
font-family:Cursive;
line-height:1;
border-radius:5px;
background-color:#A2AB58;
color:#ff0;
font-size:20px;
-webkit-appearance:none;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
outline:none
}
select:hover {
color:#00ff7f
}
.submit {
width:353px;
height:45px;
color:#fff;
margin-top:170px;
background-color:#1067a2;
font-size:20px;
font-weight:700
}
.error {color: #FF0000;}
</style>
</head>
<body>  
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

<select name="Color[]" multiple> // Initializing Name With An Array
<option value="Music">Music</option>
<option value="Publishing">Publishing</option>
<option value="Film & Video">Film & Video</option>
<option value="Food">Food</option>
<option value="Design">Design</option>
<option value="Crafts">Crafts</option>
<option value="Games">Games</option>
<option value="Comics">Comics</option>
<option value="Fashion">Fashion</option>
<option value="Theater">Theater</option>
<option value="Art">Art</option>
<option value="Photography">Photography</option>
<option value="Technology">Technology</option>
</select>

<input type="submit" name="submit" class="submit" value="Get Selected Values" />
</form>

<a href="apriori.php">find frequent itemsets</a>
</body>
</html>