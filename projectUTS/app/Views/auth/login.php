<!DOCTYPE html>
<html>
<head>
    <title>Login - Catatanku</title>
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3>Login</h3>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form method="post" action="/login">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required />
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required />
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
</div>

</body>
</html>
