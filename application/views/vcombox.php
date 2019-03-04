<div class="container">
	<label>Provinsi</label>
	<div id="combox">
		<select name="id_prov" id="id_prov" class="form-control" onchange="get_kota()">
			<option></option>
			<?php
			foreach($provinsi as $data)
			{
				?>
				<option value="<?=$data->id_prov?>"><?=$data->nama?></option>
				<?php
			}
			?>
		</select>
	</div>
	<label>Kota /  Kabupaten</label>
	<div id="div_kota">
		<select name="id_kab" id="id_kab" class="form-control"></select>
	</div>
</div>
<script type="text/javascript">
	function get_kota()
	{
		var id_prov = $("#id_prov").val();
		$.ajax ({
			type :"POST",
			url : "<?php echo base_url('index.php/cbdinamis/get_kota');?>",
			data : "id_prov="+id_prov,
			success:function(msg){
				$("#div_kota").html(msg);
			}
		});
	}
</script>