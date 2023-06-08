<?php 
setcookie("id", null, time()-23760, "/");
setcookie("idgroup", null, time()-23760, "/");
header("Location: ./index.php");
?>