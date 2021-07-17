/*

ASSIGNMENT 3 Part-2

Generate a simple PHP program to illustrate the working of the following operations.

a). Writing to a File
b). Locking Files

*/

/* a */

<?php
$file = fopen("test.txt","w");
echo fwrite($file,"Welcome");
fclose($file);
?>

/* b */

<?php
$file = fopen("test.txt","w+");
// exclusive lock
if (flock($file,LOCK_EX)) {
  fwrite($file,"Welcome");
  // release lock
  flock($file,LOCK_UN);
} else {
  echo "Error locking file!";
}
fclose($file);
?>
