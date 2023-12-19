<?php
require_once('./utils/database_connect.php');
include_once('./partials/header.php');
include_once('./partials/footer.php');

?>


<section class="container-md">
  <div class="d-flex flex-column align-items-center">
    <h1>Welcome to our Mini-Chat</h1>



  </div>
</section>

<section class="container-md mt-4">

<div class="container-md d-flex flex-column" id="chat-box">

  <div class="card align-items-center" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">
      <?php
      include('./process/prepare-message-process.php');
      foreach($jointures as $jointure) {
        echo '<p>' .
        $jointure['pseudo'].
        $jointure['content'].
        $jointure['created_at'].
        $jointure['ip_adress'].
        $jointure['user_id'].
         '</p>';
    } 
      
      ?>
    </p>
  </div>
</div>

<div class="container-md d-flex mt-5 justify-content-center align-items-end">
    <form action="../process/send-message-process.php" method="post">
      <div class="card d-flex flex-column align-items-center" style="width: 50rem;">

        <div class="card-body d-flex justify-content-center align-items-center">
          <label for="pseudo" class="me-2">Pseudo </label>
          <input type="text" name="pseudo" id="pseudo" class="my-3 mx-3">

          <label for="message">Message </label>
          <input type="text" name="content" class="my-3 mx-3">
          <input type="hidden" name="created_at">
          <input type="hidden" name="ip_adress">
          <input type="hidden" name="user_id">

          <input type="submit" value="Send" class="btn text-light mb-2" style="background-color: #6f42c1">

        </div>

      </div>
    </form>
  </div>
</div>



  
</section>