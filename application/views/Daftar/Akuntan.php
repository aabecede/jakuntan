

<div class="row" style="background-color: rgb(60,60,60)">
	<br>

	<div class="container" style="background-color: rgb(60,60,60)">
		<div class="col-lg-3">
		</div>
		
		
		
		<div class="col-lg-6" style="background-color: white; border-radius: 10px;">
			<img src="<?php echo base_url();?>assets/images/1.png" class="img-fluid" width="50px">

			<br>
			<?php
			

			?>
			<p align="center"><b>DAFTAR SEBAGAI AKUNTAN</b><br>
			<var>Selamat datang di JAKUNTAN, tempat dimana melakukan jasa pembuatan laporan akutansi</var></p>

			<form action="<?php echo base_url('daftarakuntan');?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-lg-2">
					</div>
					
					<div class="col-lg-2"></div>
					<div class="col-lg-10">
						<div class="col-lg-2">
						</div>
			<?php echo @$alert;?>
						<div class="col-lg-10">
						<label for="exampleInputEmail1">Nama Lengkap<span style="color: red">*</span></label>
							    <input type="text" name="nama" class="form-control" required="" value="<?php echo $this->input->post('nama');?>">
						    
						    <label for="exampleInputPassword1">Email<span style="color:red">*</span></label>
						    <input type="email" name="email" class="form-control" required="" id="exampleInputPassword1" placeholder="email" value="<?php echo $this->input->post('email');?>">
						    <label for="password">Sandi<span style="color:red">*</span></label>
						    <input type="password" name="password" class="form-control" required="<?php echo $this->input->post('password');?>">
						    <label for="nohp">Nomor Telpon<span style="color: red">*</span></label>
						    <input type="number" name="notelp" class="form-control" id="nohp" required="" value="<?php echo $this->input->post('notelp');?>">
						    <br>
						    <input type="hidden" name="status" value="1">
						   <Input type="submit" class="btn btn-primary" value="Lanjut" name="lanjut">
							</div>

							<div class="col-lg-2">
							</div>
	
					</div>
					
				</div>
			</form>

		</div>
		<div class="col-lg-3">
		</div>

	</div>
	<Br>
</div>