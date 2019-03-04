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
        <button class="tablinks" onclick="openCity(event, 'Beranda')" style="color: green">Beranda</button>
        <button class="tablinks" onclick="openCity(event, 'Pemesananku')" style="color: green">Pemesananku</button>

        
      </div>

      <div id="Beranda" class="tabcontent">
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
