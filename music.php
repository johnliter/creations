<?php
require_once __DIR__ . '/inc/config.php';
$title = "Music - " . SITE_NAME;
$page_heading = "Music (Coming Soon)";
require_once __DIR__ . '/inc/header.php';
?>

<div class="card" style="padding:16px;">
  <div style="font-weight:800; margin-bottom:6px;">Next step</div>
  <div style="color:rgba(255,255,255,.7); line-height:1.6;">
    This section will be a feed of your tracks with platform badges (Suno/Drive),
    and quick “Open” links. Optional: embed players where allowed.
  </div>
</div>

<div class="mobile-nav">
  <a href="/images.php" class="<?= active_nav('/images.php') ?>">
    <span class="icon">🖼️</span>
    Images
  </a>
  <a href="/prompts.php" class="<?= active_nav('/prompts.php') ?>">
    <span class="icon">🧠</span>
    Prompts
  </a>
  <a href="/music.php" class="<?= active_nav('/music.php') ?>">
    <span class="icon">🎵</span>
    Music
  </a>
</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
