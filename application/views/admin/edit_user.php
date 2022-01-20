<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA PENGGUNA</h3>

    <?php foreach($pengguna as $pgn) : ?>

        <form method="POST" action="<?php echo base_url(). 'admin/updateu' ?>">

        <div class="form-group">
            <label>Nama Pengguna</label>
            <input type="text" name="name" class="form-control" value="<?php echo $pgn->name ?>">
            <input type="hidden" name="id" class="form-control" value="<?php echo $pgn->id ?>">
        </div>
        
    
        <div class="form-group">
            <label>Role</label>
            <input type="text" name="role" class="form-control" value="<?php echo $pgn->role_id ?>">
        </div>

        <div class="form-group">
                    <label>Gambar</label><br>
                    <input type="file" name="gambar" class="form-control">
                  </div>

        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>


        </form>

        <?php endforeach; ?>
</div>