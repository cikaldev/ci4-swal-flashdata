<?php

function swal($tipe, $judul='', $pesan='') {
  $kode_js = '<script>showNotif("'.$tipe.'", "'.$judul.'", "'.$pesan.'")</script>';
  return session()->setFlashdata('notif', $kode_js);
}