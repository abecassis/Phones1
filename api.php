<?php
 require_once 'phone.php';
?>

<?php
       
         

      $Phone= new Phone(null,null,null);
      $arr = $Phone->show_phones();
      echo ($arr);





?>