<div class="col-md-9">
	<div class="row">
		<?php foreach ($query_buku->result() as $b) { ?>
		<div class="col-md-4">
			<div class="card m-3">
		        <img src="<?=base_url('dist/'.$b->image)?>" class="card-img-top">
		        <div class="card-body"><b><?=$b->judul;?></b><br>
		            <i class="small badge badge-info">Kategori : <?=$b->kategori;?></i>
		            <i class="small badge badge-danger">Tersedia <?=$b->stok;?> Buku</i>
		        </div>
		        <div class="card-footer btn-group align-center">
		        	<?php if ($b->stok < 1 ) { ?>

						<button class="btn btn-danger btn-sm">
							<i class="fa fa-times"></i> Stok Kosong
						</button>

					<?php }else{ ?>

		            <a href="" class="btn btn-success btn-sm">Pinjam <i class="fa fa-send"></i></a>

		            <?php } ?>

		            <a href="<?=base_url('crud/detail/'.$b->id)?>" class="btn btn-info btn-sm">Detail <i class="fa fa-info"></i></a>

		        </div>
		    </div>
		</div>
		<?php } ?>	
	</div>
</div>