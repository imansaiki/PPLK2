<main>

  <div class="container">
    <div class="white" style="padding-left:20px;padding-right:20px;padding-bottom:20px;padding-top:2px">
      <div class="row">
        <h2>Daftar lowongan</h2>
      </div>
      <div class="row">
        <?php foreach ($list as $key => $value): ?>
          <a href="index/<?php echo $value['idloker'] ?>">
            <div class="col l12">
              <div class="card-panel hoverable">
                <div class="row">
                  <div class="col l6">
                    <div class="valign-wrapper">
                      <h5><?php echo $value['nama'] ?></h5>
                    </div>
                  </div>
                  <div class="col l6">
                      <div class="right-align">
                        <?php echo $value['namaperusahaan'] ?><br>
                        <?php echo $value['tipe'] ?><br>
                        <?php echo $value['gaji_min'].' - '.$value['gaji_max'] ?><br>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </a>

        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>
