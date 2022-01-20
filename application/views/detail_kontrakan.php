
        <div class="container-fluid mt-2">
            <!-- detail -->
            <div class="card">
            <div class="card-header text-white"style="background-color: rgba(114, 65, 48, 1)">
                <h3>Detail Kontrakan</h3>
            </div>
            <div class="card-body"style="background-color: rgba(114, 65, 48, 1)">

    
                <div class="row">
                    <div class="col-md-4"> 
                        <img src="<?php echo base_url(). '/assets/img/'.$kontrakan->gambar?>" class="card-img-top">

                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless text-white">
                          <tr>
                            <td>Nama Kontrakan</td>
                            <td><strong><?php echo $kontrakan->nama_kontrakan?></strong></td>
                        
                          <tr>
                            <td>Alamat</td>
                            <td><strong><?php echo $kontrakan->alamat?></strong></td>
                          </tr>
                          <tr>
                            <td>Pemilik</td>
                            <td><strong><?php echo $kontrakan->pemilik?></strong></td>
                            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=6285155296783&text=Permisi" role="button"><i class="fab fa-whatsapp"></i> Hubungi Pemilik</a>
                          </div>
                          </tr>
                          
                          <tr>
                            <td>Tipe</td>
                            <td><strong><?php echo $kontrakan->tipe?></strong></td>
                          </tr>
                          <tr>
                            <td>Harga</td>
                            <td><strong><span class="badge bg-success">Rp.<?php echo $kontrakan->harga?></span></strong></td>
                          </tr>
                        </table>
                        <a class="btn btn-light" href="<?=base_url()?>user" role="button">Kembali</a>
                    </div>
                </div>
            </div>
            <!-- end detail -->

            <!-- rincian -->

            <div class="card">
            <div class="card-header text-white mt-5" style="background-color: grey;">
                <h3>Rincian</h3>
            </div>
            <div class="card-body"style="background-color: grey;">

    
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-borderless text-white">
                          <tr>
                            <td>Luas Tanah</td>
                            <td><strong><?php echo $kontrakan->rincian->luas_tanah?></strong></td>
                        
                          <tr>
                            <td>Luas Bangunan</td>
                            <td><strong><?php echo $kontrakan->rincian->luas_bangunan?></strong></td>
                          </tr>
            
                          <tr>
                            <td>Kamar Tidur</td>
                            <td><strong><?php echo $kontrakan->rincian->kamar_tidur?></strong></td>
                          </tr>
                          
                          <tr>
                            <td>Kamar Mandi</td>
                            <td><strong><?php echo $kontrakan->rincian->kamar_mandi?></strong></td>
                          </tr>
                          
                        </table>
                    </div>
                </div>
            </div>
            
          <!-- end rincian -->
            

          <!-- deskripsi -->
            
          <div class="card">
            <div class="card-header text-white mt-5" style="background-color: rgba(114, 65, 48, 1);">
                <h3>Rincian</h3>
            </div>
            <div class="card-body"style="background-color: rgba(114, 65, 48, 1);">

    
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-borderless text-white">
                          <tr>
                            <td><strong><?php echo $kontrakan->rincian->deskripsi?></strong></td>
                        
                          
                        </table>
                    </div>
                </div>
            </div>

            <div class="container mt-5" >
              <h1>Map</h1>
              <div class="responsive-map mt-5">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.1083024619311!2d107.64843822914038!3d-6.958115668458031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e837651fdcaf%3A0xd95dd4f75703743b!2sJl.%20Batu%20Permata%20V%20No.5%2C%20Cijaura%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040287!5e0!3m2!1sen!2sid!4v1637563678822!5m2!1sen!2sid"
                  width="1000"
                  height="450"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                ></iframe>
              </div>
            </div>
            <hr class="mt-5" />

            <!-- end spesifikasi -->
        </div>