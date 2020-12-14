<?=$this->extend('template')?>

<?=$this->section('content')?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <p>
      <a href="/" class="btn btn-dark">Kembali</a>
    </p>
    <div class="card">
      <?=form_open()?>
      <div class="card-body">
        <div class="mb-3">
          <label for="" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nomor Telepon</label>
          <input type="number" name="telp" class="form-control" placeholder="08xx" required="">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
        &nbsp; <a href="/" class="btn btn-warning">Batal</a>
      </div>
      <?=form_close()?>
    </div>
  </div>
</div>
<?=$this->endSection()?>