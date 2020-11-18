<?php 

class About {
    public function index($nama = 'Fadli', $pekerjaan= 'Mahasiswa')
    {
        echo "Halo nama Saya $nama, Saya adalah $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
?>