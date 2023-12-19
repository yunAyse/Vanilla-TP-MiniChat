<?php 
require_once('../utils/database_connect.php');


if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
  $pseudoName = $_POST['pseudo'];

  $sql = "SELECT pseudo FROM user WHERE pseudo = '$pseudoName'" ;
  $request = $db->query($sql);
  $pseudos = $request->fetchAll();

  foreach ($pseudos as $pseudo) {
     session_start($pseudo);
     var_dump($pseudo);
  }
 
 

  header('Location: ../pages/chat.php');
} else {
  header('Location: ../pages/create-user.php');
}
  

  
//   if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

//   $sql = 'INSERT INTO user (pseudo) VALUES (:pseudo)';
//   $request = $db->prepare($sql);
// }

//   $request->execute([
  //     'pseudo' => $_POST['pseudo']
  //   ]);
  
  
  
  

  // header('Location: ../pages/user-profile.php');

// } else {
//   echo 'the username is not available.';

?>