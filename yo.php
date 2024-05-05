$sql = "UPDATE `players`SET `xp`= `xp`+ 1 WHERE `name` = '".$_REQUEST['name']."'";
   if(mysql_query($sql)){
     return "success!";
   }
   else {
    return "failed!";
  }