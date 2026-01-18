<?php

function h($str) {
  return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8');
}

function active_nav($path) {
  $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  return $current === $path ? 'active' : '';
}
