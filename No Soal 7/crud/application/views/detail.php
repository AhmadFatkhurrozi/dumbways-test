<div class="col-md-9">

	<div class="row mt-1">
		<?php foreach ($query_buku->result() as $b) { ?>
		<div class="col-md-12">
			<div class="card m-3">
		        <center><img src="<?=base_url('dist/'.$b->image)?>" class="mt-5" height="200"></center>
		        <div class="card-body">Judul : <b><?=$b->judul;?></b><br><br>
		            <p>Kategori : <?=$b->kategori;?></p>
		            <p>Tersedia : <?=$b->stok;?> Buku</p>
		            <p>Deskripsi :</p>
		            <i><?=$b->deskripsi;?></i>
		        </div>
		        <div class="card-footer btn-group align-center">
					<?php if ($b->stok < 1 ) { ?>

						<button class="btn btn-danger btn-sm">
							<i class="fa fa-times"></i> Stok Kosong
						</button>

					<?php }else{ ?>

		            <a href="" class="btn btn-success btn-sm">Pinjam <i class="fa fa-send"></i></a>

		            <?php } ?>
		            <a href="<?=base_url('crud')?>" class="btn btn-info btn-sm">Kembali</a>
		        </div>
		    </div>
		</div>
		<?php } ?>
	</div>
</div>