<?php include(APPPATH.'Views/layouts/header.php'); ?>
<?php include(APPPATH.'Views/layouts/sidebar.php'); ?>

<div class="container mt-4">
    <h3>Dashboard User</h3>
    <p>Catatan Harian:</p>
    <ul>
        <?php foreach ($notes as $n): ?>
            <li><?= $n ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include(APPPATH.'Views/layouts/footer.php'); ?>
