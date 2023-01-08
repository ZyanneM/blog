<?php

session_start();

$delete = PostManager::deletePost();

header('location:index.php');