<?php

class Preview extends Controller
{
    public function index($id_kursus)
    {
        $data['id_kursus'] = $id_kursus;
        $data['kursus'] = $this->model('Kursus_model')->getKursusById($id_kursus);
        $data['materi'] = $this->model('Materi_model')->getMateriByIdKursus($id_kursus);
        $this->view('templates/header');
        $this->view('templates/navbar');
        $this->view('preview/index', $data);
        $this->view('templates/footer');
    }
}
