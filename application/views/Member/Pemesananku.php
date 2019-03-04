<link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/lib/datatable/dataTables.bootstrap.min.css">
 
  
<div class="row">
	<div class="container">
	 <table id="tabel-data" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Pemesan</th>
                              <th>Layanan</th>
                              <th>Haga</th>
                              <th>Tanggal Masuk</th>
                              <th>Tanggal Terima</th>
                              <th>Keterangan</th>
                              <th>Status</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>

                          <?php $no =1;
                              foreach ($pemesanan as $key => $value) { ?>
                              <tr>
                                  <td><?php echo $no ?></td>
                                  <td><?php echo $value->nalog ?></td>
                                  <td><?php echo $value->nalay ?></td>
                                  <td><?php echo $value->harga ?></td>
                                  <td><?php echo $value->tgl_masuk?></td>
                                  <td><?php echo $value->tgl_com;?></td>
                                  <td><?php echo $value->keterangan;?></td>
                                  <td>

                                  	<?php if($value->natus == '0'){
                                  		echo 'Belum Di Approve';
                                  	}else{
                                  		echo $value->natus;	
                                  	}
                                  	?>
                                  </td>
                                  <td class="text-right">
                                  	
                                    <!-- <form action="<?php echo site_url('member/terimapesanan/'.$value->idpemesanan);?>" method="post" enctype="multipart/form-data">
                                      <input type="hidden" name="status" value="terima">
                                      <?php $now = $this->db->query('select now() as now;')->row();?>
                                      <input type="hidden" name="tgl_com" value="<?php echo $now->now;?>">
                                      <input type="submit" value="batal" class="btn-primary btn-xs" onclick="terima()">
                                    
                                    </form> -->
                                      <!-- <a href="<?php echo site_url("akuntan/terimapesanan/$value->id/terima"); ?>" onclick="terima()" class="btn btn-primary btn-xs"><b class="glyphicon glyphicon-edit"></b></a>
                                      <a href="<?php echo site_url("akuntan/terima/$value->id/tolak"); ?>" class="btn btn-danger btn-xs"><b class="glyphicon glyphicon-trash"></b></a> -->
                                  </td>
                              </tr>
                          <?php $no++;
                          } ?>
                      </tbody>
                     <!--  <tfoot>
                         <tr>
                             <td>NomerB</td>
                             <td>Tipe</td>
                             <td>Waktu</td>
                             <td>Durasi</td>
                             <td>Aksi</td>
                         </tr>
                     </tfoot> -->
                  </table>
	</div>
</div>

 <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url('assets/');?>suffe/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#tabel-data').DataTable();
        } );
    </script>