<?php
	$con = mysqli_connect("localhost","username","password","db");

	$num = $_GET['num'];

      $sql = "insert into test(num) values('$num') ";
      mysqli_query($con, $sql);

      mysqli_close($con);

     // echo ("<meta http-equiv='Refresh' content='1; URL=h_index_test.html'>");

?>
