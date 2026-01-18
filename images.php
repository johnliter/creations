<?php
require_once __DIR__ . '/inc/config.php';
require_once __DIR__ . '/inc/db.php';

$title = "Images - " . SITE_NAME;
$page_heading = "Images";

$rows = $pdo->query("SELECT id, title, drive_url, thumbnail_url, tags, created_at
                     FROM creations_images
                     ORDER BY created_at DESC
                     LIMIT 60")->fetchAll();

require_once __DIR__ . '/inc/header.php';
?>

<div class="grid">
  <?php foreach ($rows as $r): ?>
    <div class="card">
      <?php if (!empty($r['thumbnail_url'])): ?>
        <img class="thumb" src="<?= h($r['thumbnail_url']) ?>" alt="<?= h($r['title']) ?>" />
      <?php else: ?>
        <div class="thumb" style="display:grid;place-items:center;color:rgba(255,255,255,.5);">
          No thumbnail yet
        </div>
      <?php endif; ?>

      <div class="card__body">
        <div class="card__title"><?= h($r['title']) ?></div>
        <div class="card__meta">
          <span><?= h(date('M j, Y', strtotime($r['created_at']))) ?></span>
          <?php if (!empty($r['tags'])): ?>
            <span>• <?= h($r['tags']) ?></span>
          <?php endif; ?>
        </div>

        <button
          class="btn"
          data-modal="open"
          data-title="<?= h($r['title']) ?>"
          data-url="<?= h($r['drive_url']) ?>"
          data-img="<?= h($r['thumbnail_url'] ?: '') ?>"
        >
          View
        </button>

      </div>
    </div>
  <?php endforeach; ?>
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
