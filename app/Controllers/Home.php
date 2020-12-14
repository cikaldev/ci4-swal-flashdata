<?php
namespace App\Controllers;

use App\Models\KontakModel;

class Home extends BaseController
{

  private $model;

  public function __construct()
  {
    helper(['form', 'url', 'custom']);
    $this->model = new KontakModel();
  }

	public function index()
	{
    $data['kontak'] = $this->model->findAll();
    return view('v_home', $data);
	}

  public function tambah()
  {
    if ($this->request->getMethod() == 'post') {
      $this->model->insert([
        'nama' => $this->request->getPost('nama'),
        'telp' => $this->request->getPost('telp')
      ]);
      swal('success', 'Sukses', 'Kontak berhasil ditambahkan.');
      return redirect()->to('/');
    } else {
      return view('v_tambah');
    }
  }

  public function ubah($id)
  {
    if ($this->request->getMethod() == 'post') {
      $this->model->update($id, [
        'nama' => $this->request->getPost('nama'),
        'telp' => $this->request->getPost('telp')
      ]);
      swal('success', 'Sukses', 'Kontak berhasil diperbarui.');
      return redirect()->to('/');
    } else {
      $data['rs'] = $this->model->find($id);
      return view('v_ubah', $data);
    }
  }

  public function hapus($id)
  {
    $this->model->delete($id);
    swal('success', 'Data berhasil dihapus');
    return redirect()->to('/');
  }

}
/* End of file Home.php */
/* Location: ./ci4-swal-flashdata/app/Controllers/Home.php */