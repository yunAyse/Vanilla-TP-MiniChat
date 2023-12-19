<?php
require_once('./utilis/connect.php');

$request = $db->query('SELECT * FROM message JOIN user ON message.user_id = user.id');
    $jointures = $request->fetchAll();