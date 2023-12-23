<?php

class Home extends Controller
{
    public function index()
    {
        header("location: " . BASEURL . "/kursus");
    }
}
