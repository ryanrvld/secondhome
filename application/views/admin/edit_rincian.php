<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT RINCIAN KONTRAKAN</h3>

    <?php foreach($rincian as $rcn) : ?>

        <form method="POST" action="<?php echo base_url(). 'admin/urincian' ?>">

        <div class="form-group">
            <label>Luas Tanah</label>
            <input type="text" name="luas_tanah" class="form-control" value="<?php echo $rcn->luas_tanah ?>">
        </div>
        
        <div class="form-group">
            <label>Luas Bangunan</label>
            <input type="hidden" name="id_rincian" class="form-control" value="<?php echo $rcn->id_rincian ?>">
            <input type="text" name="luas_bangunan" class="form-control" value="<?php echo $rcn->luas_bangunan ?>">
        </div>

        <div class="form-group">
            <label>Kamar Tidur</label>
            <input type="text" name="kamar_tidur" class="form-control" value="<?php echo $rcn->kamar_tidur ?>">
        </div>

        <div class="form-group">
            <label>Kamar Mandi</label>
            <input type="text" name="kamar_mandi" class="form-control" value="<?php echo $rcn->kamar_mandi ?>">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control" value="<?php echo $rcn->deskripsi ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>


        </form>

        <?php endforeach; ?>
</div>