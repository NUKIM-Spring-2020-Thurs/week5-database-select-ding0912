<?php

$link = mysqli_connect( 
            'localhost', 
            'root',
            'password',
            'php2020');

$SQL="SELECT * FROM employee";

if($result=mysqli_query($link, $SQL)){
	echo "<table border='1'>";
	echo "<tr><td><b>No</td>
		      <td><b>Fname</td>
		      <td><b>Minit</td>
		      <td><b>Lname</td>
		      <td><b>Bdate</td>
		      <td><b>Address</td>
		      <td><b>Sex</td>
		      <td><b>Salary</td></tr>";
	while( $row = mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['No']."</td>".
			 "<td>".$row['Fname']."</td>".
			 "<td>".$row['Minit']."</td>".
			 "<td>".$row['Lname']."</td>".
			 "<td>".$row['Bdate']."</td>".
			 "<td>".$row['Address']."</td>".
			 "<td>".$row['Sex']."</td>".
			 "<td>".$row['Salary']."</td>".
			 "</tr>";
	}
}else{
	echo "找不到";
}


?>