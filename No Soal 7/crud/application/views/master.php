<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../../../favicon.ico">

		<title>Dumbways Test</title>

		<link href="<?=base_url('dist/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('dist/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

		<link href="navbar-top-fixed.css" rel="stylesheet">
	</head>

	<body>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a class="navbar-brand" href="#">Dumbways <b>Soal No. 7</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
				</ul>
				<form class="form-inline mt-2 mt-md-0">
					<span class="text-light">ahmadfatkhurrozi99@gmail.com</span>
				</form>
			</div>
		</nav>

		<div class="container">
			<div class="row mb-5" style="padding-top:70px; ">
				<div class="col-md-3">
					<strong><i class="fa fa-book"></i> Kategori Buku</strong>

			        <div class="list-group">
			        	<a href="<?=base_url()?>" class="btn-sm lst list-group-item">Semua</a>
			        	<?php foreach($query_kategori->result() as $k){ ?> 
			          	<a href="<?=base_url('crud/bukuKat/'.$k->id)?>"
			          		class="btn-sm lst list-group-item">
			            	<?php echo $k->name;?>(<?php echo $k->total ?>)
			          	</a>
			          	<?php } ?>
			        </div>
			        <br>
			        <strong><i class="fa fa-book"></i> Manage</strong>

			       <div class="list-group">
			       		<a href="<?=base_url('crud/tambahKategori')?>" class="btn-sm lst list-group-item">
			       			<i class="fa fa-plus"></i> Tambah Kategori</a>
			       		<a href="<?=base_url('crud/tambahBuku')?>" class="btn-sm lst list-group-item">
			       			<i class="fa fa-plus"></i> Tambah Buku</a>
			       </div>
				</div>
				<?php echo $konten; ?>
			</div>
		</div>

		<script src="<?=base_url('dist/js/jquery.min.js')?>"></script>
		<script src="<?=base_url('dist/js/bootstrap.min.js')?>"></script>
	</body>
</html>