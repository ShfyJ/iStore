<?php

if(isset($_POST['search']))
{
	$valueToSearch=$_POST['valueToSearch'];
	$query="SELECT * FROM 'products' WHERE CONCAT('name') LIKE '%".$valueToSearch."%'";
	$search_result=filterTable($query);
}
else{
	$query= "SELECT * FROM 'products'";
	$search_result=filterTable($query);
}

function filterTable($query)
{
	$connect=mysqli_connect("localhost","blueskyu","IPproject1@3","blueskyu_istore");
	$filter_Result= msqli_query($connect,$query);
	return $filter_Result;
}


?>
