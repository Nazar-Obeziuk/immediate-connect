<?php
// Определение базового домена
$baseDomain = 'https://yourdomain.com';
$baseURL = $baseDomain;
$baseSite = 'yourdomain.com';

// Получение текущего URL для каноничного URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Удаление ненужных параметров запроса, если это необходимо
$canonicalURL = strtok($currentURL, '?');
