<?php
  //file connetion db
  //syntax:
  //mysqli_connect(host, username, password, dbname, port, socket)
  $link = mysqli_connect("localhost","root","");
  mysqli_select_db($link,"lms");
?>
