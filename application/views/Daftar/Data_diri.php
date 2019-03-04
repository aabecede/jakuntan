 <style type="text/css">
    /* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: white;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
} 
 </style>
 <!-- content -->
 <div class="row">
    <div class="container">
        <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Data Diri')" style="color: green">Data Diri</button>
        <button class="tablinks" onclick="openCity(event, 'Identitas')" style="color: green">Identitas</button>
        <?php
        if(@$status == '1')
        {
          ?>
        <button class="tablinks" onclick="openCity(event, 'Layanan')" style="color: green">Layanan</button>
        <button class="tablinks" onclick="openCity(event, 'Dompet')" style="color: green">Dompet</button>
        <button class="tablinks" onclick="openCity(event, 'Pesanan')" style="color: green">Pesanan</button>  
          <?php
        }else{
          ?>
          <!-- <button class="tablinks" onclick="openCity(event, 'Pesananku')" style="color: green">Pesananku</button> -->
          <?php
        }
        ?>
        
      </div>
<?php
echo @$alert;

?>
      <div id="Data Diri" class="tabcontent">
        <h3>Lengkapi Data diri anda</h3>
        <p>Kelengkapan profil Anda adalah hal yang utama. Informasi ini akan digunakan oleh pengguna Jakuntan.com dalam memilih Akunta. Untuk itu, pastikan bahwa informasi Anda lengkap, menarik, dan berbahasa sopan. </p>
        <table class="table table-responsive">
            <tr>
                <td>Nama Lengkap</td>
                <td><?php 
                if(@$query->username == false)
                {
                  echo $nama;
                }else{
                  echo @$query->username;
                }
                ?>
                  
                </td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td><?php 
                if(@$query->notelp == false)
                {
                  echo $notelp;
                }else{
                  echo $query->notelp;
                }
                ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                  <?php
                  if(@$query->jk == '1')
                  {
                    echo 'Laki - Laki';
                  }else{
                    echo 'Perempuan';
                  }
                  ?>
                </td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td><?php echo @$query->naprov;?></td>
            </tr>
            <tr>
                <td>Kota / Kabupaten</td>
                <td><?php echo @$query->nakab;?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo @$query->alamat;?></td>
            </tr>
            <td>Foto</td>
                <td>
                  <div class="col-lg-12">
                    <img src="<?php echo base_url('assets/images/jakuntan/'.@$query->foto.'');?>" class="form-control" style="width: 150px;height: 150px;">
                    </div>
                </td>
            <tr>
                <td>Tentang Saya</td>
                <td><?php echo @$query->aboutme;?></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="#" data-target="#myModal" data-toggle="modal" id="custId" data-id="<?php echo $this->session->userdata('id');?>" style="border-radius: 10px;" class="btn btn-success">Edit</a></td>
            </tr>
        </table>
      </div>
<?php #var_dump($idt);
foreach ($idt as $key) {
  
}
?>


      <div id="Identitas" class="tabcontent">
        <h3>Lengkap Identitas Anda</h3>
        <p>Identitas lengkap Anda akan digunakan untuk melakukan verifikasi terhadap profil Anda. Profil tanpa identitas yang lengkap akan memiliki skor rendah pada hasil pencarian guru kami. Pastikan lagi bahwa nomor identitas dan foto KTP Anda dikenali oleh sistem. Data rekening bank dan nomor NPWP kami butuhkan untuk kebutuhan transfer remunerasi jasa Anda</p>
        <form action="<?php echo base_url('Akuntan/up_identitas');?>" method="post" enctype="multipart/form-data">
          <table class="table">
              <tr>
                  <td>NPWP (Nomor Pokok Wajib Pajak)<span style="color: blue">*</span></td>
                  <td><div class="col-lg-6">
                    
                    <?php
                    if(@$key->statusgm == 0)
                    {
                      ?>
                      <img src="<?php echo base_url('assets/images/jakuntan/'.@$key->npwp.'');?>" class="form-control" style="width: 150px;height: 150px;" id="uploadPreview">
                      <span>Gambar Belum tersedia</span>
                      <?php
                    }elseif(@$key->statusgm == 1){
                      ?>
                      <img src="<?php echo base_url('assets/images/jakuntan/'.@$key->npwp.'');?>" class="form-control" style="width: 150px;height: 150px;" id="uploadPreview">
                      <span>Sedang di proses</span>
                      <?php
                    }elseif(@$key->statusgm == 2){
                      ?>
                      <img src="<?php echo base_url('assets/images/jakuntan/'.@$key->npwp.'');?>" class="form-control" style="width: 150px;height: 150px;" id="uploadPreview">
                      <span style="color:red">Upload Kembali, Tidak sesuai</span>
                      <?php
                    }else{
                      ?>
                      <img src="<?php echo base_url('assets/images/jakuntan/'.@$key->npwp.'');?>" class="form-control" style="width: 150px;height: 150px;" id="uploadPreview">
                      <span style="color:green">Berhasil</span>
                      <?php
                    }
                    ?>
                    
                      <input id="uploadImage" type="file" name="npwp" class="form-control" required="" onchange="PreviewImage();">
                    </div>
                    
                  </td>
              </tr>
              <tr>
                  <td>Nama Bank<span style="color:blue">*</span></td>
                  <td><div class="col-lg-6">
                    <input type="text" name="nama_bank" required="" value="<?php echo @$key->nama_bank;?>" min="0" class="form-control">
                    <input type="hidden" name="statusgm" value="<?php echo @$query->status;?>">
                  </div></td>
              </tr>
              <tr>
                  <td>Nomor Rekening<span style="color:blue">*</span></td>
                  <td><div class="col-lg-6">
                    <input type="text" name="nomor_rekening" class="form-control" min="0" required="" value="<?php echo @$key->nomor_rekening;?>">
                  </div>
                </td>
              </tr>
              <tr>
                  <td>Nama Pemilik Rekening<span style="color:blue">*</span></td>
                  <td><div class="col-lg-6">
                    <input type="text" name="nama_pemilik" class="form-control" min="0" required="" value="<?php echo @$key->nama_pemilik;?>">
                  </div>
                </td>
              </tr>
              <!-- <tr>
                <td>Foto</td>
                <td>
                  <div class="col-lg-6">
                    <img src="<?php echo base_url('assets/images/jakuntan/'.@$key->foto.'');?>" class="form-control" style="width: 150px;height: 150px;" id="uploadPreview2">
                      <input id="uploadImage2" type="file" name="foto" class="form-control" required="" onchange="PreviewImage2();">
                    </div>
                </td>
              </tr> -->
              <tr>
                  <td></td>
                  <td><input type="submit" value="Ubah Identitas" style="border-radius: 10px;" class="btn btn-info"></td>
              </tr>
          </table>
        </form>
      </div>
<?php
if(@$status == '1')
{
  ?>
   <div id="Layanan" class="tabcontent">
        <h3>Layanan</h3>
        <p></p>
        <form action="<?php echo base_url('#');?>" method="post" enctype="multipart/form-data">
          <table class="table">
            <tr>
                <th>Layanan</th>
                <th>harga</th>
            </tr>
              <?php
              foreach ($userlayanan as $data) {
                echo '<tr>
                          <td>'.$data->nama.'</td>
                          <td>Rp '.number_format($data->harga,'2').'</td>
                      </tr>';
              }
              ?>
              <tr>
                  <td></td>
                  <td><a href="#" data-target="#myModalUbah" data-toggle="modal" id="custId" data-id="<?php echo $this->session->userdata('id');?>" class="btn btn-success">Ubah Data</a>
                    <a href="#" data-target="#myModalb" data-toggle="modal" style="border-radius: 10px;" class="btn btn-info">Tambah Layanan</a></td>
              </tr>
    
           </table>
        </form>
      </div> 

      <div id="Dompet" class="tabcontent">
        <h3>Dompet</h3>
        <p>Jumlah keseluruhan uang yang didapat</p>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table">
              
            </table>
        </form>
      </div> 

      <div id="Pesananku" class="tabcontent">
        <h3>Dompet</h3>
        <p>Jumlah keseluruhan uang yang didapat</p>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table">
              
            </table>
        </form>
      </div> 

  <!-- Core DataTable -->
  <link href="<?php echo base_url('assets/datatables/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery-3.1.0.js')?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
    $('#tabel-data').DataTable();
    });

      $('#tbl1').DataTable({
            "columnDefs": [{ 
                "targets": [ -1 ],
                "orderable": false,
            }]
        });
    </script>
  <!-- enc Core Datatable -->
      <div id="Pesanan" class="tabcontent">
        <h3>Data Pemesanan Masuk</h3>
          <div class="panel panel-default">
              <div class="panel-body">
                  <table id="tabel-data" class="table table-striped table-bordered " cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Pemesan</th>
                              <th>Layanan</th>
                              <th>Haga</th>
                              <th>Keterangan</th>
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
                                  <td><?php echo $value->keterangan;?></td>
                                  <td class="text-right">
                                    <form action="<?php echo site_url('akuntan/terimapesanan/'.$value->idpemesanan);?>" method="post" enctype="multipart/form-data">
                                      <input type="hidden" name="status" value="terima">
                                      <?php $now = $this->db->query('select now() as now;')->row();?>
                                      <input type="hidden" name="tgl_com" value="<?php echo $now->now;?>">
                                      <input type="submit" class="btn-primary btn-xs" onclick="terima()">

                                    </form>
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
      </div> 
  <?php
}
?>
     
     
 </div>
</div>
<div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Diri</h4>
                </div>
                <div class="modal-body">
                        <form action="<?php echo base_url('akuntan/update_datadiri');?>" method="post" enctype="multipart/form-data">
              <table class="table">
                
                <?php #var_dump($id);?>
                  <tr>
                      <td>Nama Lengkap</td>
                      <td><div class="col-lg-5"><input type="text" name="nama" value="<?php if(@$query->username == true)
                      {
                        echo @$query->username;
                      }else{
                        echo @$nama;
                      }?>" class="form-control"></div></td>
                  </tr>
                  <tr>
                    <td>No Handphone</td>
                    <td><div class="col-lg-5"><input type="text" min="0" name="notelp" value="<?php if(@$query->notelp == true){
                      echo @$query->notelp;
                    }else{
                      echo @$notelp;
                    }?>" class="form-control"></div></td>
                  </tr>
                  <tr>
                      <td>Jenis Kelamin</td>
                      <td><div class="col-lg-5">
                          <select name="jk" class="form-control" required="">
                            <?php
                            if(@$query->jk == '1')
                            {
                              echo '<option value="1">Laki - laki</option>
                              <option value="2">Perempuan</option>';
                            }else{
                              echo '<option value="2">Perempuan</option>
                              <option value="1">Laki - laki</option>';
                            }
                            ?>
                              
                          </select>
                          </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Provinsi</td>
                    <td>
                        <div class="col-lg-5">
                            <select name="id_prov" id="id_prov" class="form-control" onchange="get_kota()" required="">
                              <option><?php echo @$query->naprov;?></option>
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
                    </td>
                  </tr>

                  <tr>
                    <td>Kota</td>
                    <td>
                      <div class="col-lg-5">
                        <div id="div_kota">
                          <select name="id_kab" id="id_kab" class="form-control"></select>

                        </div>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>Alamat</td>
                    <td><div class="col-lg-5">
                      <textarea name="alamat" class="form-control" required=""><?php echo @$query->alamat;?></textarea>
                    </div>
                  </td>
                  </tr>
                  <tr>
                    <td>Foto</td>
                    <td>
                      <div class="col-lg-6">
                        <img src="<?php echo base_url('assets/images/jakuntan/'.@$query->foto.'');?>" class="form-control" style="width: 150px;height: 150px;" id="uploadPreview2">
                          <input id="uploadImage2" type="file" name="foto" class="form-control" required="" onchange="PreviewImage2();">
                        </div>
                    </td>
                  </tr>
  
                  <tr>
                      <td>Tentang Saya</td>
                      <td><div class="col-lg-5">
                      <textarea name="aboutme" class="form-control" required=""><?php echo @$query->aboutme;?></textarea>
                    </div></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" style="border-radius: 10px;" value="simpan"></td>
                  </tr>
              </table>
            </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
      <!-- //tambah-->
      <!-- layanan -->
      <div class="modal fade bs-example-modal-lg" id="myModalb" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Diri</h4>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url('akuntan/layanan');?>" method="post" enctype="multipart/form-data">
                    <table class="table table-responsive">
                      <tr>
                        <td>Jenis Layanan</td>
                        <td><div class="col-lg-12">

                              <select name="id_layanan" class="form-control">
                                <option></option>
                                <?php

                                foreach($layanan as $data)
                                {
                                  echo '<option value="'.$data->id.'">'.$data->nama.'</option>';
                                }
                                ?>
                              </select>
                            </div>
                       </td>
                     </tr>
                      <tr>
                          <td>Harga</td>
                          <td><div class="col-lg-6">
                            <input type="text" name="harga" class="form-control">
                          </div></td>
                      </tr>

                      <tr>
                          <td></td>
                          <td><input type="submit" class="btn btn-success" value="Tambah"></td>
                      </tr>
                      
                    </table>
                  </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
      <!-- //tambah-->
<!-- ubah -->
<div class="modal fade bs-example-modal-lg" id="myModalUbah" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h4>Ubah Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('akuntan/updatelayanan');?>" method="post" enctype="multipart/form-data">
                      <table class="table table-responsive">
                      <?php
                      foreach ($userlayanan as $key) {
                        echo '<tr>
                                  <td>'.$key->nama.'</td>
                                  <td>
                                      <div class="col-lg-12">
                                        <input type="hidden" name="id_layanan" value="'.$key->id.'">
                                        <input type="text" name="harga" value="'.$key->harga.'" class="form-control">
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-info" value="update"></td>
                              </tr>
                              ';
                      }
                      ?>
                      </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
 
<!-- jquery -->
<script>
  
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
} 
</script>
<script type="text/javascript">
  function terima(){
    tanya == confirm("Yakin Menerima Project ini ?");
    if(tanya == true) return true;
    else
      return false;
  }
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

  function PreviewImage() {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
  oFReader.onload = function (oFREvent)
   {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
   };

   function PreviewImage2() {
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage2").files[0]);
  oFReader.onload = function (oFREvent)
   {
      document.getElementById("uploadPreview2").src = oFREvent.target.result;
    };
   };
</script>
