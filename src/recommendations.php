<?php 
if ($_GET['id'] != "") {
    shell_exec("java -cp Recommendations.jar com.Main " . $_GET['id']);
}
else{
    shell_exec("java -cp Recommendations.jar com.Main");
}
readfile("recommendations.html");
?>