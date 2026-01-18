<?php
require_once __DIR__ . '/inc/config.php';
$title = "Prompts - " . SITE_NAME;
$page_heading = "Prompts (Coming Soon)";
require_once __DIR__ . '/inc/header.php';
?>

<div class="card" style="padding:16px;">
  <div style="font-weight:800; margin-bottom:6px;">Next step</div>
  <div style="color:rgba(255,255,255,.7); line-height:1.6;">
    This section will pull prompts from MySQL with filters (model, aspect ratio, tags)
    and a clean copy button for each prompt.
  </div>
</div>

<div class="mobile-nav">
  <a href="/images.php" class="<?= active_nav('/images.php') ?>">
    <i class="fa-solid fa-image"></i>
    <span>Images</span>
  </a>

  <a href="/prompts.php" class="<?= active_nav('/prompts.php') ?>">
    <i class="fa-solid fa-brain"></i>
    <span>Prompts</span>
  </a>

  <a href="/music.php" class="<?= active_nav('/music.php') ?>">
    <i class="fa-solid fa-music"></i>
    <span>Music</span>
  </a>

  <a href="https://github.com/YOUR-USERNAME/YOUR-REPO" target="_blank" rel="noopener">
    <i class="fa-brands fa-github"></i>
    <span>Repo</span>
  </a>
</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
