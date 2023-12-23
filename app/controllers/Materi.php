<?php

class Materi extends Controller
{

    public function tambahMateri()
    {
        if ($this->model('Materi_model')->tambahMateri($_POST) > 0) {
            header('Location: ' . BASEURL . '/kursus/detail_kursus/' . $_POST['id_kursus']);
            exit;
        } else {
            echo 'gagal';
        }
    }
    public function ubahMateri()
    {

        if ($this->model('Materi_model')->ubahMateri($_POST) > 0) {
            header('Location: ' . BASEURL . '/kursus/detail_kursus/' . $_POST['id_kursus']);
            exit;
        } else {
            echo 'gagal';
        }
    }

    public function hapusMateri($id_materi, $id_kursus)
    {
        if ($this->model('Materi_model')->hapusMateri($id_materi) > 0) {
            header('Location: ' . BASEURL . '/kursus/detail_kursus/' . $id_kursus);
            exit;
        }
    }
    public function getUbahMateri()
    {
        echo json_encode($this->model('Materi_model')->getMateriByIdMateri($_POST['id_materi']));
    }
}
