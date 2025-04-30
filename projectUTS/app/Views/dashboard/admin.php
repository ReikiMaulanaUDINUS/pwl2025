<?php include(APPPATH.'Views/layouts/header.php'); ?>
<?php include(APPPATH.'Views/layouts/sidebar.php'); ?>

<div class="container mt-4">
    <h3>Dashboard Admin</h3>
    <p>Daftar Pengguna:</p>
    <ul>
        <?php foreach ($users as $u): ?>
            <li><?= $u ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php include(APPPATH.'Views/layouts/footer.php'); ?>
