<?php
require_once('../utils/database_connect.php');
include_once('../partials/header.php');
include_once('../partials/footer.php');
?>

<main class="container-md d-flex mt-5 justify-content-center align-items-center">
<form action="../process/create-user-process.php" method="post">
<div class="card d-flex flex-column align-items-center" style="width: 20rem;">

  <div class="card-body d-flex justify-content-center align-items-center">
    <label for="user-name" class="me-2">User Name  </label>
    <input type="text" name="pseudo" id="user-name" class="my-3">
  </div>

<div>
    <input type="submit" value="Sign Up" class="btn text-light mb-2" style="background-color: #6f42c1" >
  </div>
</div>
</form>
</main>
