<link rel="stylesheet" href="<?php echo base_url('assets/');?>suffe/css/lib/datatable/dataTables.bootstrap.min.css">
 


    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telpon</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($datamember as $key => $value) {
                            # code...
                            echo "<tr>
                            <td>$no</td>
                            <td>$value->nama</td>
                            <td>$value->email</td>
                            <td>$value->notelp</td>
                            <td>$value->alamat</td>";
                            ?>
                            <td><img src="<?php echo base_url('assets/images/jakuntan/'.$value->foto);?>" class="form-control" style="width: 150px;height: 150px;"></td></tr>
                            <?php
                            
                            $no++;
                        }
                        #var_dump($datamember);
                        ?>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

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
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>