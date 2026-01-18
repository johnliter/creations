const modal = document.getElementById('modal');
const modalTitle = document.getElementById('modalTitle');
const modalBody = document.getElementById('modalBody');

function setVH(){
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}
setVH();
window.addEventListener('resize', setVH);
window.addEventListener('orientationchange', setVH);

function openModal(title, html){
  modalTitle.textContent = title || '';
  modalBody.innerHTML = html || '';
  modal.setAttribute('aria-hidden', 'false');
}

function closeModal(){
  modal.setAttribute('aria-hidden', 'true');
  modalBody.innerHTML = '';
}

function extractDriveFileId(url){
  if (!url) return null;

  const m1 = url.match(/\/file\/d\/([a-zA-Z0-9_-]+)/);
  if (m1 && m1[1]) return m1[1];

  const m2 = url.match(/[?&]id=([a-zA-Z0-9_-]+)/);
  if (m2 && m2[1]) return m2[1];

  return null;
}

document.addEventListener('click', (e) => {
  const close = e.target.closest('[data-close="1"]');
  if (close) closeModal();

  const btn = e.target.closest('[data-modal="open"]');
  if (!btn) return;

  const title = btn.getAttribute('data-title') || '';
  const url = btn.getAttribute('data-url') || '';

  const fileId = extractDriveFileId(url);
  const previewUrl = fileId ? `https://drive.google.com/file/d/${fileId}/preview` : null;

  const iframeHtml = previewUrl
    ? `
      <div style="border:1px solid rgba(255,255,255,.10); border-radius:16px; overflow:hidden;">
        <iframe
          src="${previewUrl}"
          style="width:100%; height:100%; border:0; background:rgba(255,255,255,.03);"
          allow="autoplay"
        ></iframe>
      </div>
    `
    : `
      <div style="color:rgba(255,255,255,.70);padding:12px;border:1px solid rgba(255,255,255,.10);border-radius:16px;">
        Could not generate a Drive preview for this link. Make sure it is a standard Drive file link.
      </div>
    `;

  openModal(title, `
    <div style="display:flex; flex-direction:column; gap:12px;">
      ${iframeHtml}
      <a class="btn" href="${url}" target="_blank" rel="noopener">Open in Google Drive</a>
    </div>
  `);
});
