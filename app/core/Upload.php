<?php

class Upload
{
    public static function uploadImage($page, $redirect)
    {
        $namaFile = $_FILES['thumbnail']['name'];
        $ukuranfile = $_FILES['thumbnail']['size'];
        $error = $_FILES['thumbnail']['error'];
        $tmpName = $_FILES['thumbnail']['tmp_name'];

        // cek gambar diupload atau tidak
        if ($error === 4) {
            Flasher::setFlash('Pilih gambar terlebih dahulu', '', 'error');
            header('Location: ' . BASEURL . "/$redirect");
            die;
        }

        // cek apakah yang diupload gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            Flasher::setFlash('Gambar harus JPG, JPEG, PNG', '', 'error');
            header('Location: ' . BASEURL . "/$redirect");
            die;
        }

        // cek ukuran gambar
        if ($ukuranfile > 2000000) {
            Flasher::setFlash('Gambar tidak boleh lebih dari 2 MB', '', 'error');
            header('Location: ' . BASEURL . "/$redirect");
            die;
        }

        // membuat nama gambar dari nama produk
        $namaFile = time() . "." . $ekstensiGambar;

        // upload gambarr
        move_uploaded_file($tmpName, "C:/xampp/htdocs/online_course/public/images/$page/" . $namaFile);

        return $namaFile;
    }

    public static function deleteImage($page, $image)
    {
        if (file_exists("C:/xampp/htdocs/online_course/public/images/$page/" . $image)) {
            unlink("C:/xampp/htdocs/online_course/public/images/$page/" . $image);
        }
    }
}
