<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Swal Test</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/sweetalert2.min.css">
</head>
<body>
  <div class="text-center p-5 bg-primary text-light">
    <h1>Swal Test Flashdata</h1>
    <p>by <a href="https://t.me/@iancikal" class="text-light" target="_blank">@iancikal</a></p>
  </div>
  <div class="container mt-3">
    <?=$this->renderSection('content')?>
  </div>
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/sweetalert2.min.js"></script>
  <script>
    function showNotif(tipe, judul, pesan) {
      var arrayTipe = ['success','error','warning','info','question'];
      if (tipe.includes(arrayTipe) != false) {
        tipe = 'info';
      }
      return Swal.fire({
        icon: tipe,
        title: judul,
        text: pesan,
        showConfirmButton: true
      })
    }

    function konfirmasi(tujuan) {
      Swal.fire({
        title: 'Anda yakin?',
        text: 'Data yang sudah dihapus tidak dapat dibatalkan!',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          location.replace(tujuan)
        }
      })
    }
  </script>

  <?=session()->getFlashdata('notif')?>
</body>
</html>