<?php require_once __DIR__ . '/functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= h($title ?? SITE_NAME) ?></title>
  <link rel="stylesheet" href="/assets/styles.css?v=2" />
</head>
<body>
  <div class="app">
    <aside class="sidebar">
      <div class="brand">
        <div class="brand__logo">JL</div>
        <div class="brand__text">
          <div class="brand__title">Creations</div>
          <div class="brand__sub">johnliter.blog</div>
        </div>
      </div>

      <nav class="nav">
        <a class="nav__item <?= active_nav('/images.php') ?>" href="/images.php">
          <span class="dot"></span> Images
        </a>
        <a class="nav__item <?= active_nav('/prompts.php') ?>" href="/prompts.php">
          <span class="dot"></span> Prompts
          <span class="pill">Soon</span>
        </a>
        <a class="nav__item <?= active_nav('/music.php') ?>" href="/music.php">
          <span class="dot"></span> Music
          <span class="pill">Soon</span>
        </a>
      </nav>

      <div class="sidebar__footer">
        <a class="link" href="https://johnliter.blog" target="_blank" rel="noopener">← Back to johnliter.blog</a>
      </div>
    </aside>

    <main class="main">
      <div class="topbar">
        <div class="topbar__title"><?= h($page_heading ?? '') ?></div>
        <div class="topbar__right">
          <!-- Search/filter later -->
        </div>
      </div>
      <div class="content">
