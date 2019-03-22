<!-- echo syntax errors -->
<?php
  $name = "John";
  $lname = "Doe";
  $age = 38;
?>
<p><?php echo "My name is $name<br>"; ?></p>
<p><?= "My last name is $lname<br>"; ?></p>
<p><?= echo "I am $age years old."; ?></p>