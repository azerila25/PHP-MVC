<?php

class About {
    public function index($name = 'Ali', $job = 'Mahasiswa'){
        echo "Halo, nama saya $name, dan pekerjaan saya $job";
    }
    public function page(){
        echo 'About/page';
    }
}