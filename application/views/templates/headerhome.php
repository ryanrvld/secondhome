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
    
    <link
			href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css"
			rel="stylesheet"
			type="text/css"
		/>
    <title><?php echo $judul; ?></title>
  </head>
  <body>
    <!-- nav -->
<nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: rgba(114, 65, 48, 1);">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url();?>">
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
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategorihome/harga3jthome">3 juta/Bulan</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategorihome/harga4jthome">4 Juta/Bulan</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategorihome/harga5jthome">5 juta/Bulan</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active mx-5" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Tipe </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategorihome/tipeahome">Tipe A</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategorihome/tipebhome">Tipe B</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url();?>kategorihome/tipechome">Tipe C</a></li>
                </ul>
              </li>
          </ul>
          
          <div class="navbar-form navbar-right">
            <?php echo form_open('home/cari')?>
            <input type="text" name="keyword" class="form-control bg-transparent" placeholder="alamat,harga,tipe.....">
          </div>
            <button type="submit" class="btn btn-outline-success md-3">Cari</button>
            <?php echo form_close()?>
        
        </div>
      </div>
    </nav>
    <!-- end nav -->
   
    <!-- nav2 -->
       <nav class="navbar navbar-dark " style="background-color: rgba(114, 65, 48, 1);">
          <div class="container-fluid">
            <div class="d-grid gap-2 d-md-block ms-auto">
              <a class="btn btn-outline-primary" href="<?php echo base_url('home/login');?>" role="button" >Log In</a>
								</a>
            </div>
          </div>
       </div>
     </nav>
    <!-- end nav 2 -->
   
   
   