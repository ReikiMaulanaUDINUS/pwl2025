<?php 
	/**
	 * Bootstrap page
	 * Require file autoload dari vendor
	 */

	session_start();
	
	require_once __DIR__ . '/vendor/autoload.php';
	use Controllers\Mahasiswa;
	use Controllers\Auth;

	/**
	 * Buat objek dari controller
	 */
	$mahasiswa = new Mahasiswa();
	$auth = new Auth();

	$act = $_GET['act'] ?? 'login';

	// Semua act yang tidak termasuk login, harus sudah login dulu
	$public_routes = ['login', 'loginProcess'];

	// mengecek session login
	if (!isset($_SESSION['logged_in']) && !in_array($act, $public_routes)) {
		header('Location: ?act=login');
		exit;
	}
	
	// routing
	switch ($act) {
		case 'login':
			$auth->loginForm();
			break;
		case 'loginProcess':
			$auth->loginProcess();
			break;
		case 'logout':
			$auth->logout();
			break;
		case 'home':
			$mahasiswa->index();
			break;
		case 'simpan':
			$mahasiswa->save();
			break;
		case 'tampil-data':
			$mahasiswa->show_data();
			break;
		case 'soft-delete':
			$mahasiswa->softDelete();
			break;
		default:
			$mahasiswa->index();
			break;
	}
	?>