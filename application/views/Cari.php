<style type="text/css">
	.search-top{
	border: 1px solid #dbdbdb;
padding: 10px;
height: 60px;
display: -ms-flexbox;
display: flex;
-ms-flex-align: center;
align-items: center;
-ms-flex-pack: justify;
justify-content: space-between;
background-color: #edefed;

}
.search-result_item{
	padding: 0;
    margin: 0;
    list-style: none;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
</style>

<div class="row">
	<div class="container">
		<div class="search-top">
			
			<form action="<?php echo site_url('member/pencarian');?>" method="post" enctype="multipart/form-data">
				<input type="text" name="cari" placeholder="<?php echo @$cari;?>" class="form-control">
			</form>
		</div>
		<?php
		foreach (@$result as $key) {
			?>
		<div class="search-result_item">
			<div class="row">
				<div class="col-lg-3">
					<div class="thumbnail">
						<img src="<?php echo base_url('assets/images/jakuntan/'.$key->foto);?>" class="img-thumbnail">
					</div>
				</div>
				<div class="col-lg-6">
					<table class="table table-responsive">
						<tr>
							<td><a href="<?php echo base_url('Member/detailuser/'.$key->idlog);?>"><?php echo $key->nalog;?></a></td>
						</tr>
						<tr>
							<td>Keterangan :</td>
							<td><?php echo $key->alamat.'<br>'.$key->aboutme;?></td>
						</tr>
					</table>
				</div>
				<div class="col-lg-3">
					<table class="table table-responsive">
						<tr>
							<td><?php echo $key->namlay;?></td>
						</tr>
						<tr>
							<td><?php echo 'Rp '.number_format($key->harga,0,',','.');?></td>
						</tr>
					</table>
					<a href="<?php echo site_url("pemesanan/pesan/$key->idlog/$key->idlay");?>" class="btn btn-warning">Pesan Jasa</a>
				</div>
			</div>
		</div>
			<?php
		}
		?>
	</div>
</div>