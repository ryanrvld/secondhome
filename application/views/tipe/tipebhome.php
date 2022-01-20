    <!-- banner -->    
    <div class="container-fluid banner">
      <div class="container banner-content col-lg-6">
        <div class="text-center">
           <p class="fs-1">
             Selamat Datang di SecondHome
           </p>
           <p class="d-none d-md-block">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eius corporis autem repudiandae nisi similique adipisci fugiat nulla. Nobis, soluta.
           </p>
        </div>
      </div>
    </div>
    <!-- end banner -->

    <!-- menu -->
    <br />
    <div class="container-fluid">
      <div class="row">

      <?php foreach ($tipeb as $kntrk) : ?>
        
        <div class="card mb-3 me-md-3 shadow" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
            <img src="<?php echo base_url();?>/assets/img/contoh.jpeg" class="img-fluid rounded-start mt-3" alt="...">
              <p class="mt-2 text-center text-muted"><?php echo $kntrk->tipe ?></p>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kntrk->nama_kontrakan ?></h5>
                <p class="card-text"><i class="fas fa-road"></i> <?php echo $kntrk->alamat ?></p>
                <strong class="card-text mb-auto"><i class="fas fa-dollar-sign"></i> Rp <?php echo $kntrk->harga ?></strong>
                <p class="card-text"><small class="text-muted"><?php echo $kntrk->pemilik ?></small></p>
                <?php echo anchor('home/detailhome/' .$kntrk->id_kontrakan, '<button type="button" class="btn btn-outline-info"><i class="fas fa-info"></i> Detail</button>') ?>

              </div>
            </div>
          </div>
        </div>

        
       
        <?php endforeach; ?>
      </div>
    </div>

      <!-- end menu -->
      <!-- pinggiran -->

      <!-- end pinggiran -->

      <!-- footer -->
      <div class="container">
        <footer class="py-3 my-4">
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
      </div>
      <!-- end footer -->
    </div>
