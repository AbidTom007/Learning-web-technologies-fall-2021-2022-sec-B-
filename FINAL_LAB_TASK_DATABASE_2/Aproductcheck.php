<?php
	session_start();

	if(isset($_REQUEST['Submit']))
	{
		$Name= $_REQUEST['name'];
		$bprice= $_REQUEST['bprice'];
		$sprice= $_REQUEST['sprice'];
		$display= $_REQUEST['display'];
		if($Name != "")
		{
			if($bprice != "")
			{
						$con = mysqli_connect('localhost','root','','product_db');
						$sql = "insert into add_products(Name,Buying_Price,Selling_Price,Display,) values ('{$Name}','{$bprice}','{$sprice}','{$display}') ";
						$result = mysqli_query($con, $sql);
						header('location: display.html');
						mysqli_close($con);
			}
			else
			{
				echo "invalid Pricing.....";
			}
		}
		else
			{
				echo "invalid Name...";
			}
	}
?>