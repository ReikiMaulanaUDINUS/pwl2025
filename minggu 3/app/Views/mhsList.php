<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<table class="table table-responsive table-bordered table-striped">
						<tr><td>No</td><td>NIM</td><td>Nama</td><td>Created</td><td>Deleted</td></tr>
						<?php 

							 foreach ($rs as $mahasiswa) {
                            echo '<tr>';
                            echo '<td><a href="?act=tampil-data&i='.$mahasiswa['id'].'">'.$mahasiswa['id'].'</a></td>';
                            echo '<td>'.$mahasiswa['nim'].'</td>';
                            echo '<td>'.$mahasiswa['nama'].'</td>';
                            
                            // tampilkan data created_at dan deleted_at
							echo '<td>'.$mahasiswa['created_at'].'</td>';
                            echo '<td>';
                            if (!empty($mahasiswa['deleted_at'])) {
                                	echo $mahasiswa['deleted_at'];
                            	} else {
                                	echo ' - ';
                            	}
                            echo '</td>';
                            
                            // Tombol hapus data
                            echo '<td>
                                    <form method="POST" action="?act=soft-delete">
                                        <input type="hidden" name="id" value="'.$mahasiswa['id'].'">
                                        <button type="submit" class="btn btn-warning">Soft Delete</button>
                                    </form>
                                  </td>';
                            echo '</tr>';
                        }

						?>
					</table>
				</div>
				<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
