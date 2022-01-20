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
    <div class="container-fluid ml-3">
      <div class="row">

      <?php foreach ($kontrakan as $kntrk) : ?>
        
        <div class="card mb-3 me-md-3 shadow" style="max-width: 540px;">
          <div class="row">
            <div class="col-md-4">
            <img src="<?php echo base_url(). '/assets/img/'.$kntrk->gambar?>" class="card-img-top mt-3">
            <figcaption class="mt-2 figure-caption text-center"><?php echo $kntrk->tipe ?></figcaption>
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title"><?php echo $kntrk->nama_kontrakan ?></h5>
                <p class="card-text"><i class="fas fa-road"></i> <?php echo $kntrk->alamat ?></p>
                <strong class="card-text mb-auto"><i class="fas fa-dollar-sign"></i> Rp <?php echo $kntrk->harga ?></strong>
                <p class="card-text"><small class="text-muted"><?php echo $kntrk->pemilik ?></small></p>
                <?php echo anchor('user/detail/' .$kntrk->id_kontrakan, '<button type="button" class="btn btn-outline-info"><i class="fas fa-info"></i> Detail</button>') ?>
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
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
      </div>
      <!-- end footer -->
    </div>

    