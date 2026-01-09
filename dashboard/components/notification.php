<?php if (isset($_SESSION['notif'])):
  $type = $_SESSION['notif']['type']; // success | danger | warning | info
  $msg  = $_SESSION['notif']['message'];
?>
<style>
/* ===== Custom Toast ===== */
.app-toast {
  min-width: 280px;
  max-width: 360px;
  border-radius: .5rem;
  padding: .75rem 1rem;
  color: #fff;
  box-shadow: 0 10px 25px rgba(0,0,0,.15);

  opacity: 0;
  transform: translateX(24px);
  transition:
    opacity .45s ease,
    transform .45s cubic-bezier(.4,0,.2,1);
}

.app-toast.show {
  opacity: 1;
  transform: translateX(0);
}

.app-toast.hide {
  opacity: 0;
  transform: translateX(24px);
}

/* color variants */
.app-toast.success { background: #198754; }
.app-toast.danger  { background: #dc3545; }
.app-toast.warning { background: #ffc107; color:#000; }
.app-toast.info    { background: #0dcaf0; color:#000; }
</style>

<div class="position-fixed top-0 end-0 p-3" style="z-index:1095">
  <div id="appToast" class="app-toast <?= $type ?>">
    <div class="d-flex align-items-center">
      <div class="flex-grow-1">
        <?= htmlspecialchars($msg) ?>
      </div>
      <button type="button"
              class="btn-close btn-close-white ms-3"
              aria-label="Close"></button>
    </div>
  </div>
</div>

<script>
const toast = document.getElementById('appToast');

// force browser to register initial state
requestAnimationFrame(() => {
  toast.classList.add('show');
});

// auto hide
setTimeout(() => {
  toast.classList.remove('show');
  toast.classList.add('hide');
}, 3000);

// remove DOM after animation
setTimeout(() => {
  toast?.parentElement?.remove();
}, 3600);

// manual close
toast.querySelector('.btn-close').onclick = () => {
  toast.classList.remove('show');
  toast.classList.add('hide');
  setTimeout(() => toast.parentElement.remove(), 450);
};
</script>
<?php unset($_SESSION['notif']); endif; ?>