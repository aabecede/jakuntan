<div class="row">
	<div class="container">
		<h3>Pemesanan Akuntan</h3>
		<div class="panel panel-default">
			<div class="panel-body">
				<form action="<?php echo site_url('Pemesanan/pesanakuntan') ;?>" method="post" enctype="multipart/form-data">
					<div class="thumbnail">
						<img src="<?php echo base_url('assets/images/jakuntan/'.$query->foto);?>" class="img-thumbnail">
					</div>
					<h4>Info :</h4>
					<table class="table table-responsive">
						<tr>
							<td>Nama</td>
							<td><?php echo $query->nalog;?></td>
						</tr>
						<tr>
							<td>Nomor Telpon</td>
							<td><?php echo $query->notelp;?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><?php echo $query->alamat;?></td>
						</tr>
						<tr>
							<td>Jenis Layanan</td>
							<td><?php echo $query->namlay;?></td>
						</tr>
						<tr>
							<td>Keterangan Porject</td>
							<td><textarea class="form-control" name="keterangan"></textarea></td>
						</tr>
					</table>
					<?php $now = $this->db->query("select now() as now")->row();?>
					<input type="hidden" name="idakuntan" value="<?php echo $query->idlog;?>">
					<input type="hidden" name="idpemesan" value="<?php echo $id;?>">
					<input type="hidden" name="idlayanan" value="<?php echo $query->idlay;?>">
					<input type="hidden" name="harga" value="<?php echo $query->harga;?>">
					<input type="hidden" name="tgl_masuk" value="<?php echo $now->now;?>">
					<input type="submit" value="Pesan Sekarang" onclick="pesan()" class="btn btn-info">
					<a href="<?php echo site_url('member/');?>" class="btn btn-danger">Kembali</a>
				</form>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function pesan()
	 {
	 	tanya = confirm("Yakin memesan akuntan ini ?");
	 	if(tanya == true )return true;
	 	else
	 		return false;
	 }
</script>

