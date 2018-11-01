<?php
/**
 * Created by PhpStorm.
 * User: arb
 * Date: 31/10/2018
 * Time: 17:30
 */

require ('model.php');

$postId = $_GET['id'];

$post = getPost($postId);
$comments = getComments($postId);
require ('postView.php');