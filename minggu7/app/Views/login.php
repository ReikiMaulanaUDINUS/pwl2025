<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login - Native MVC Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
	<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="container" style="margin-top:50px;">
        <!-- Header -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2></h2>
                <hr>
            </div>
        </div>

        <!-- Login Panel -->
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php if (!empty($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                            </div>
                        <?php endif; ?>
                        <form action="?act=loginProcess" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input 
                                  type="text" 
                                  id="username" 
                                  name="username" 
                                  class="form-control" 
                                  placeholder="Enter username"
                                  required 
                                  autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input 
                                  type="password" 
                                  id="password" 
                                  name="password" 
                                  class="form-control" 
                                  placeholder="Enter password"
                                  required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
                <p class="text-center"><small>&copy; <?= date('Y'); ?> Reiki Maulana Putra</small></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="/mvc-ex/assets/js/jquery.min.js"></script>
    <script src="/mvc-ex/assets/js/bootstrap.min.js"></script>
</body>
</html>
