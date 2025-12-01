<a href="<?= htmlspecialchars($link) ?>" class="btn btn-<?= htmlspecialchars($color) ?>" 
    <?php if ($tooltip): ?>
        data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="<?= htmlspecialchars($tooltip) ?>"
    <?php endif; ?>>
    <?php if ($icon): ?>
        <i class="<?= htmlspecialchars($icon) ?>"></i>
    <?php endif; ?>
    <?= htmlspecialchars($text) ?>
</a>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>