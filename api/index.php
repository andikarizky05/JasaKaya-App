<?php

// Simple router for Vercel deployment
// This file handles all requests and routes them to Laravel

// Set the correct document root
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Include Laravel's public index.php
require_once __DIR__ . '/../public/index.php';