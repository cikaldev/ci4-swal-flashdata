<?=$this->extend('template')?>

<?=$this->section('content')?>
<div class="row">
  <div class="col-md-8 mx-auto">
    <p class="text-right">
      <a href="/home/tambah" class="btn btn-success">Tambah Data</a>
    </p>
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr class="text-center">
          <th>Nama</th>
          <th>Telepon</th>
          <th width="250">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (count($kontak) > 0) {
          foreach($kontak as $rs) {
            echo '<tr>
              <td>'.$rs->nama.'</td>
              <td>'.$rs->telp.'</td>
              <td class="text-center">
                <a href="/home/ubah/'.$rs->id.'" class="btn btn-sm btn-warning w-25 mr-2">Edit</a>
                <button onclick="konfirmasi(\'/home/hapus/'.$rs->id.'\')" class="btn btn-sm btn-danger w-25">Hapus</button>
              </td>
            </tr>';
          }
        } else {
          echo '<tr>
            <td colspan="4" class="text-center">Data masih kosong</td>
          </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?=$this->endSection()?>