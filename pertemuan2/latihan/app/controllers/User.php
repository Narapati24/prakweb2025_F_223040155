<?php 
class User extends Controller {
  public function index() {
    $data['judul'] = 'Daftar Pengguna';
    $data['users'] = $this->model('User_model')->getAllUsers();
    $this->view('templates/header', $data);
    $this->view('user/list', $data);
    $this->view('templates/footer');
  }

  public function detail($id) {
    $data['judul'] = 'Detail Pengguna';
    $data['user'] = $this->model('User_model')->getUserById($id);
    $this->view('templates/header', $data);
    $this->view('user/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah() {
    if( $this->model('User_model')->addUser($_POST) > 0 ) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/user');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/user');
      exit;
    }
  }
}

?>