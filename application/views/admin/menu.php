					<!-- Begin Page Content -->
					<div class="container-fluid">
						<!-- Page Heading -->
						<h1 class="h3 mb-4 text-gray-800">Menu</h1>

						<br />
						
							<!-- Menu -->

              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
               <i class="icon fa fa-check"></i>
               <?=$this->session->flashdata('success'); ?>
              </div>
             
              

              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#tambah">Tambah Data</button>

              <div class="table-responsive">
              <table class="table table-bordered mt-3">
                <tr class="text-center">
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Nama Kontrakan</th>
                  <th>Alamat</th>
                  <th>Pemilik</th>
                  <th>Tipe</th>
                  <th>Harga</th>
                  <th colspan="3">Aksi</th>
                </tr>

                <?php
                $no=1;
                foreach($kontrakan as $kntrk) : ?>

                <tr class="text-center">
                  <td><?php echo $no++ ?></td>
                  <td><img src="<?php echo base_url(). '/assets/img/'.$kntrk->gambar?>" class="img-profile" style="width: 200px; height: 200px;"></td>
                  <td><?php echo $kntrk->nama_kontrakan?></td>
                  <td><?php echo $kntrk->alamat?></td>
                  <td><?php echo $kntrk->pemilik?></td>
                  <td><?php echo $kntrk->tipe?></td>
                  <td><?php echo $kntrk->harga?></td>
                  <td><?php echo anchor('admin/erincian/' .$kntrk->id_kontrakan, '<div class="btn btn-outline-success btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                  <td><?php echo anchor('admin/edit/' .$kntrk->id_kontrakan, '<div class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                  <td><?php echo anchor('admin/hapus/' .$kntrk->id_kontrakan, '<div class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hapusdata"><i class="fas fa-trash"></i></div>')?></td>
                </tr>
                
                <?php endforeach; ?>

              </table>
              </div>
 

      <!-- end menu -->
                           
					<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->

        <!-- Modal Tambah data -->
          <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Input Kontrakan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url(). 'admin/tambah_aksi'?>" method="POST" enctype="multipart/form-data">

                  <div class="form-group">
                    <label>Nama Kontrakan</label>
                    <input type="text" name="nama_kontrakan" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Pemilik</label>
                    <input type="text" name="pemilik" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Tipe</label>
                    <input type="text" name="tipe" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                  </div>
                  
                  <div class="form-group">
                    <label>Gambar</label><br>
                    <input type="file" name="gambar" class="form-control">
                  </div>
               
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Modal Hapus Data -->

          <div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Input Kontrakan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          
         
