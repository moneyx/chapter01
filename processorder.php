<html>
<head>
<title>Bob' Auto Parts - Order Results</title>
</head>
<body>
<?php
 //create  variable
 $tireqty = $_POST['tireqty'];
 $oilqty = $_POST['oilqty'];
 $sparkqty = $_POST['sparkqty'];
?>
<h1>Bob' Auto Parts</h1>
<h2>Order Results</h2>
<?php 
	echo"<p>Order processed at ".date('H:i js F')."</p>";
	//echo '<p>your order is as follows:</p>';
	//echo $tireqty.'tires</br>';
	//echo "$tireqty tires</br>";
	//echo $oilqty.'bottles</br>';
	//echo $sparkqty.'spark plugs</br>';

	$totalqty = 0;
	$totalamout = 0.00;

	define('TIREPRICE',100);
	define('OILPRICE',10);
	define('SPARKPRICE',4);
    $totalqty = $tireqty + $oilqty + $sparkqty;
	$totalamout = $tireqty*TIREPRICE 
				+ $oilqty*OILPRICE
				+ $sparkqty*SPARKPRICE;

	echo "Items order : $totalqty</br>";
	echo "Subtaotal: $".number_format($totalamout,2)."<br/>";

	$taxrate = 0.10;  //local tax10%
	$totalamout = $totalamout*(1+$taxrate);
	echo "Total include tax :$".number_format($totalamout,2)."<br/>";
	 //where customer from
	$find = $_POST['find'];
	/*echo "$find";
	switch($find){
	 case "a":
	  echo "regular customer";
	  break;
	 case "b":
	  echo "customer by tv";
	  break;
	 case "c":
      echo "customer by Phone";
	  break;
	 case "d":
      echo "customer by word of mouth";
	  break;
	 default:
	  echo "we  do not know";
	
	}*/
	if($find == "a"){
	  echo "<p>Regular Customer</p>";
	}elseif ($find == "b"){
	  echo "<p>Customer by TV </p>";
	}elseif ($find == "c"){
		echo "<p>Customer by phone</p>";
	}elseif ($find == "d"){
		echo "<p>Customer by word of mouth</p>";
	}else {
		echo "<p>we do not know</p>";
	}
	
?>
</body>
</html>