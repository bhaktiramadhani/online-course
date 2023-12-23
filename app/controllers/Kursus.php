<?php

class Kursus extends Controller
{
    public function index()
    {
        $data['kursus'] = $this->model('Kursus_model')->getAllKursus();
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('kursus/index', $data);
        $this->view('templates/footer');
    }
    public function detail_kursus($id_kursus)
    {
        $data['materi'] = $this->model('Materi_model')->getMateriByIdKursus($id_kursus);
        $data['kursus'] = $this->model('Kursus_model')->getKursusById($id_kursus);
        $data['id_kursus'] = $id_kursus;
        if (empty($data['kursus'])) {
            Flasher::setFlash('Kursus tidak ada', 'link kursus tidak valid!', 'info');
            header('Location: ' . BASEURL . '/kursus');
            exit;
        }

        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('kursus/detail_kursus', $data);
        $this->view('templates/footer');
    }

    public function tambahKursus()
    {

        $thumbnail = Upload::uploadImage('kursus', 'kursus');
        $_POST['thumbnail'] = $thumbnail;
        if ($this->model('Kursus_model')->tambahKursus($_POST) > 0) {
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }

    public function ubahKursus()
    {
        $error = $_FILES['thumbnail']['error'];

        if ($error === 4) {
            $thumbnail = $_POST['thumbnail_name'];
        } else {
            $thumbnail = Upload::uploadImage('kursus', 'kursus');
            Upload::deleteImage('kursus', $_POST['thumbnail_name']);
        }
        $_POST['thumbnail'] = $thumbnail;

        if ($this->model('Kursus_model')->ubahKursus($_POST) > 0) {
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }

    public function hapusKursus($id_kursus)
    {
        if ($this->model('Kursus_model')->hapusKursus($id_kursus) > 0) {
            header('Location: ' . BASEURL . '/');
            exit;
        }
    }

    public function getUbahKursus()
    {
        echo json_encode($this->model('Kursus_model')->getKursusById($_POST['id_kursus']));
    }
}
