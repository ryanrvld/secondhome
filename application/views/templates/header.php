<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href=" <?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap-5.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <link
			href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css"
			rel="stylesheet"
			type="text/css"
		/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/sweetalert.css">
    <link href="<?= base_url('vendor/sbadmin/');?>css/sb-admin-2.min.css" rel="stylesheet" />
    <link href=" <?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  
    <title><?php echo $judul; ?></title>
  </head>
  <body>
    <!-- nav -->
        <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: rgba(114, 65, 48, 1);">
          <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url();?>user">
        <i class="fas fa-door-open"></i>
          SecondHome
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
         </button>
        
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3 text-white mt-2"> 
          </li>
          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active mx-5" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Harga </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategori/harga3jt">3 juta/Bulan</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategori/harga4jt">4 Juta/Bulan</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategori/harga5jt">5 juta/Bulan</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active mx-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tipe </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategori/tipea">Tipe A</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategori/tipeb">Tipe B</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategori/tipec">Tipe C</a></li>
                </ul>
              </li>
          </ul>

          
          <div class="navbar-form navbar-right">
            <?php echo form_open('user/cari')?>
            <input type="text" name="keyword" class="form-control bg-transparent" placeholder="alamat,harga,tipe.....">
          </div>
            <button type="submit" class="btn btn-outline-success">Cari</button>
            <?php echo form_close()?>


          <form class="d-flex">
          <div class="col-md-auto me-4">
          <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item dropdown no-arrow ">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $user ['name'];?>
             
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" style="width: 70px; height: 70px;" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?php echo base_url('');?>">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
     </div>
  </form>
            
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="exampleModalLabel">Anda yakin akan Log Out?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
              Tekan Log Out untk lanjutkan
            </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
              <a class="btn btn-primary" href="<?php echo base_url('');?>">Logout</a>
            </div>
          </div>
        </div>
      </div>
        
   
   
   
   