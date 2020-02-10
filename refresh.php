<?php

//delete from db when doesn't exist in folder

$myquery= "SELECT FileName FROM files";		  
$result = mysqli_query($db,$myquery) or die(Mysqli_error($db));
$num_rows = mysqli_num_rows($result);

	if ($num_rows>0){
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
if(!file_exists("uploads/".$uid."/".$row['FileName'])){ 
$myquery2= "DELETE FROM files WHERE FileName = '".$row['FileName']."'";		  
$result2 = mysqli_query($db,$myquery2) or die(mysqli_error($db));
}
}
}
?>
