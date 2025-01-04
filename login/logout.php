<?php

// Import file config c
require_once 'config.php';

// Reset access token
$client->revokeToken($_SESSION['token']);

// Remove token & userdata
unset($_SESSION['token']);
unset($_SESSION['userData']);

// destroy session
session_destroy();

// Redirect to homepage
header("Location:index.php"); | Source: Genelify.com 