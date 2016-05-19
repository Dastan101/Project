<?php 
	
	function toUploadImage($id,$url){
		include "connection.php";

		$query = "INSERT INTO images VALUES('".$id."','".$url."')";
		
		//mysql_query($query);
		$res = mysqli_query($conn,$query);
	}
	function showImage($ids){
		include 'connection.php';
	$sel = "SELECT * from images where id='$ids' ";
 	if($res = mysqli_query($conn,$sel)){
 			while($arr = $res->fetch_assoc()){
				 	$url=$arr['url'];
				 	$id = $arr['id'];
				 	if (isset($_POST['show'])) {
				 		echo "<img src=$url>";
				 	}
				 	if(!$ids==$id){
				 		echo '<script language="javascript">';
						echo "alert('Wrong id')";
						echo '</script>';
						include "index.php";
				 	}
 			}
 	}
}
 ?>