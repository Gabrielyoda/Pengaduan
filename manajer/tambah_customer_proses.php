<?php

if(isset($_POST['submit'])){
	include "../config/connection.php";
    
    
    $username = $_POST['username'];
	$email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $password = $_POST['password'];
    $level = "customer_service";

    $query2 = "SELECT max(id_user) as maxKode FROM user";
	$hasil = mysqli_query($con,$query2);
	$data = mysqli_fetch_array($hasil);
	$id_user = $data['maxKode'];
	$noUrut = (int) substr($id_user, 3, 3);
	$noUrut++;
	$char = "CTS";
	$id_user= $char . sprintf("%03s", $noUrut);
   
    
    $query= "insert into user values('$id_user','$username', '$password', '$email', '$no_telp','$level')";
	$input = mysqli_query($connection,$query);

	if($input){
		echo'Data berhasil di tambahkan';
		header("location:customer.php");
	}
	else{
		echo'Gagal input data';
		header("location:tambah_cutomer.php");
}

}else{
	echo'<script>window.history.back()</script>';
}

?>