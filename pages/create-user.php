<?php
require_once('../utils/database_connect.php');
include_once('../partials/header.php');
include_once('../partials/footer.php');
?>

<main class="container-md d-flex mt-5 justify-content-center align-items-center">
<form action="../process/create-user-process.php" method="post">
<div class="card d-flex flex-column align-items-center" style="width: 50rem;">

  <div class="card-body d-flex justify-content-center align-items-center">
    <label for="pseudo" class="me-2">Pseudo </label>
    <input type="text" name="pseudo" id="pseudo" class="my-3 mx-3">

    <label for="message">Message </label>
    <input type="text" name="message"  class="my-3 mx-3">
    <input type="submit" value="Send" class="btn text-light mb-2" style="background-color: #6f42c1" >
  </div>

</div>
</form>
</main>
