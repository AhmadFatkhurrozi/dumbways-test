<div class="col-md-9">
	<strong><?php echo $menu; ?></strong>
	<hr>
	<div class="row mt-1">
		<div class="col-md-12">
			<form action="<?=base_url('crud/addBuku')?>" method="post">
				<fieldset class="form-group">
					<label>Kategori Buku</label>
					<select class="form-control" name="kategori">
						<option disabled value="">---Pilih Kategori---</option>                    
			            <?php foreach($query_kat->result() as $k) { ?>
			            	<option value="<?=$k->id;?>"><?=$k->name;?></option>
			            <?php } ?>
					</select>
				</fieldset>
				<fieldset class="form-group">
					<label>Judul Buku</label>
					<input type="text" class="form-control" name="buku" placeholder="masukkan judul buku">
				</fieldset>
				<fieldset class="form-group">
					<label>Stok</label>
					<input type="number" class="form-control" name="stok" placeholder="Exp : 20">
				</fieldset>
				<fieldset class="form-group">
			        <label>Deskripsi</label>
			          <textarea name="deskripsi" class="form-control" placeholder="masukkan deskripsi"></textarea>
			    </fieldset>
				<button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
				<a href="<?=base_url('crud');?>" class="btn btn-secondary">Kembali</a>
			</form>
		</div>
	</div>
</div>