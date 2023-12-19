<?php
include_once('../partials/footer.php');
include_once('../partials/footer.php');
require_once('../utils/database_connect.php');



?>


<?php 
include_once('../process/create-user-process.php');
?>

<div>
  <p>
    <?php echo $_SESSION['pseudo'] ?>
  </p>
</div>