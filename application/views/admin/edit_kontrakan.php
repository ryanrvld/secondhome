<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA KONTRAKAN</h3>

    <?php foreach($kontrakan as $kntrk) : ?>

        <form method="POST" action="<?php echo base_url(). 'admin/update' ?>">

        <div class="form-group">
            <label>Nama Kontrakan</label>
            <input type="text" name="nama_kontrakan" class="form-control" value="<?php echo $kntrk->nama_kontrakan ?>">
        </div>
        
        <div class="form-group">
            <label>Alamat</label>
            <input type="hidden" name="id_kontrakan" class="form-control" value="<?php echo $kntrk->id_kontrakan ?>">
            <input type="text" name="alamat" class="form-control" value="<?php echo $kntrk->alamat ?>">
        </div>

        <div class="form-group">
            <label>Pemilik</label>
            <input type="text" name="pemilik" class="form-control" value="<?php echo $kntrk->pemilik ?>">
        </div>

        <div class="form-group">
            <label>Tipe</label>
            <input type="text" name="tipe" class="form-control" value="<?php echo $kntrk->tipe ?>">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $kntrk->harga ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>


        </form>

        <?php endforeach; ?>
</div>