<?php
require_once('../utilis/connect.php');

if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {

    $pseudo_name = $_POST['pseudo'];

    // Si le pseudo existe dans ma BDD, je récupère l'utilisateur et je récupère son ID
    $request = $db->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
    $request->bindValue(':pseudo', $pseudo_name);
    $request->execute();
    $pseudoSelects = $request->fetch();

    if ($pseudoSelects) {
        // tu récupères son ID
        $userId = $pseudoSelects['id'];

        // L'id de l'utilisateur;
    } else {
        $sql = 'INSERT INTO user (pseudo) VALUES (:pseudo)';
        $request2 = $db->prepare($sql);
        $request2->execute([
            'pseudo' => $_POST['pseudo']
        ]);

        $userId = $db->lastInsertId();
    }

    $ipAdress = $_SERVER['SERVER_ADDR'];

    $createdAt = date('Y-m-d H:i:s');

    $sql1 = 'INSERT INTO message (content, created_at, ip_adress, user_id ) VALUES (:content,:created_at, :ip_adress,:user_id)';

    $request1 = $db->prepare($sql1);
    $request1->execute([
        'content' => $_POST['content'],
        'created_at' => $createdAt,
        'ip_adress' => $ipAdress,
        'user_id' => $userId
    ]);
}
header('Location: ../index.php');