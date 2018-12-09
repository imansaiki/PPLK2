<main>

  <div class="container">
    <div class="white" style="padding-left:20px;padding-right:20px;padding-bottom:20px;padding-top:2px">
      <div class="row">
        <h4><?php echo $list[0]['nama'] ?></h4>
      </div>
      <div class="row">
        <div class="col l8">
          <div class="card-panel">
            <?php echo $list[0]['deskripsi_loker'] ?>
          </div>
        </div>
        <div class="col l4">
          <div class="card-panel">
            Gaji : <?php echo $list[0]['gaji_min'].' - '.$list[0]['gaji_max'] ?>
          </div>
          <div class="card-panel">
            Gaji : <?php echo $list[0]['gaji_min'].' - '.$list[0]['gaji_max'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
