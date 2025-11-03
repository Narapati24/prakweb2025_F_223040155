<?php 
class User extends Controller {
  public function index() {
    $data['judul'] = 'Daftar Pengguna';
    $data['users'] = $this->model('User_model')->getAllUsers();
    $this->view('templates/header', $data);
    $this->view('user/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id) {
    $data['judul'] = 'Detail Pengguna';
    $data['user'] = $this->model('User_model')->getUserById($id);
    $this->view('templates/header', $data);
    $this->view('user/detail', $data);
    $this->view('templates/footer');
  }
}

?>