<div class="col-md-9">
	<strong><?php echo $menu; ?></strong>
	<hr>
	<div class="row mt-1">
		<div class="col-md-9">
			<form action="<?=base_url('crud/addKategori')?>" method="post">
				<fieldset class="form-group">
					<label>Nama Kategori</label>
					<input type="text" class="form-control" name="kategori" placeholder="Exp : Agama">
				</fieldset>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
				<a href="<?=base_url('crud');?>" class="btn btn-secondary">Kembali</a>
			</form>
		</div>
	</div>
</div>