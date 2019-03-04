<form action="<?php echo base_url('member/update');?>" method="post" enctype="multipart/form-data">
          <table class="table">
            <input type="hidden" name="id_login" value="<?php echo @$id;?>">
            <?php #var_dump($id);?>
              <tr>
                  <td>Nama Lengkap</td>
                  <td><div class="col-lg-5"><input type="text" name="nama" value="<?php echo $nama;?>" class="form-control"></div></td>
              </tr>
              <tr>
                <td>No Handphone</td>
                <td><div class="col-lg-5"><input type="text" min="0" name="notelp" value="<?php echo $notelp;?>" class="form-control"></div></td>
              </tr>
              <tr>
                  <td>Jenis Kelamin</td>
                  <td><div class="col-lg-5">
                      <select name="jk" class="form-control">
                          <option></option>
                          <option value="1">Laki - laki</option>
                          <option value="2">Perempuan</option>
                      </select>
                      </div>
                </td>
              </tr>

              <tr>
                <td>Provinsi</td>
                <td>
                    <div class="col-lg-5">
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
                  <textarea name="alamat" class="form-control"><?php echo @$datadiri->alamat;?></textarea>
                </div>
              </td>
              </tr>

              <tr>
                  <td>Tentang Saya</td>
                  <td><div class="col-lg-5">
                  <textarea name="aboutme" class="form-control"></textarea>
                </div></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" class="btn btn-success" style="border-radius: 10px;" value="simpan"></td>
              </tr>
          </table>
        </form>