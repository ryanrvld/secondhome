					<!-- Begin Page Content -->
					<div class="container-fluid">
						<!-- Page Heading -->
						<h1 class="h3 mb-4 text-gray-800">Data Pengguna</h1>

						<br />
						
							<!-- Menu -->
            

              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <i class="icon fa fa-check"></i>
               <?=$this->session->flashdata('success'); ?>
              </div>



              <div class="table-responsive">
              <table class="table table-bordered mt-3">
                <tr>
                  <th>No</th>
                  <th>Image</th>
                  <th>Nama</th>
                  <th>Id</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Keaktivan</th>
                  <th>Tanggal Dibuat</th>
                  <th colspan="3">Aksi</th>
                </tr>

                <?php
                $no=1;
                foreach($pengguna as $pgn) : ?>

                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><img src="<?php echo base_url(). 'assets/img/profile/'.$pgn->image?>" class="img-profile" style="width: 70px; height: 70px;"></td>
                  <td><?php echo $pgn->name?></td>
                  <td><?php echo $pgn->id?></td>
                  <td><?php echo $pgn->email?></td>
                  <td><?php echo $pgn->role_id?></td>
                  <td><?php echo $pgn->is_active?></td>
                  <td><?= date('d F Y', $user['date_created']); ?> </td>
                  <td><?php echo anchor('admin/editu/' .$pgn->id, '<div class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                  <td><?php echo anchor('admin/hapusu/' .$pgn->id, '<div class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#hapususer"><i class="fas fa-trash"></i></div>')?></td>
                </tr>
                <?php endforeach; ?>

              </table>
              </div>
 

      <!-- end menu -->
                           
					<!-- /.container-fluid -->
				</div>
				<!-- End of Main Content -->

       
       <!-- Modal -->
       <div class="modal fade" id="hapususer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
