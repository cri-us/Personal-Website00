<?php
$db=mysqli_connect("localhost","root","","iportfolio");
if($db){
   echo ('<input type="hidden" name = "database is connected !"');
}else{
    echo "something is wrong with database !";
}
?> 