<main>

  <div class="container">
    <div class="white" style="padding-left:20px;padding-right:20px;padding-bottom:20px;padding-top:2px">
      <div class="row">
        <h4><?php echo $list[0]['nama'] ?></h4>
      </div>
      <div class="row">
        <div class="col l8">
          <div class="card-panel">
            <h5>Deskripsi Pekerjaan</h5>
            <div class="divider"></div>
            <?php echo $list[0]['deskripsi_loker'] ?>
          </div>
        </div>
        <div class="col l4">
          <div class="card-panel">
            <h6>Syarat Umum</h6>
            <div class="divider"></div>
            Pendidikan : <?php echo $list[0]['pendidikan']?><br>
            Bidang : <?php echo $list[0]['bidang'] ?><br>
            Gaji : <?php echo $list[0]['gaji_min'].' - '.$list[0]['gaji_max'] ?><br>
            Tanggal Tutup : <?php echo $list[0]['tgl_expired'] ?>
          </div>
          <div class="card-panel">
            <div class="section">
              <h6>Data Perusahaan</h6>
              <div class="divider"></div>
              <?php echo $list[0]['namaperusahaan'] ?><br>
              Kota : <?php echo $list[0]['namaperusahaan'] ?><br>
              Alamat : <?php echo $list[0]['alamat'] ?><br>
            </div>
            <div class="section">
              <h6>Kontak</h6>
              <div class="divider"></div>
              Nama : <?php echo $list[0]['nama_cp'] ?><br>
              Email : <?php echo $list[0]['email_cp'] ?><br>
              Telepon : <?php echo $list[0]['no_telp_cp'] ?><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
