<?php

require('../Models/Mkelas.php');

class Ckelas
{

    public function SimpanKelas($nama)
    {
        $db = new Mkelas();
        echo $db->Simpan($nama);
    }

    public function UpdateKelas($nama, $newNama)
    {
        $db = new Mkelas();
        echo $db->Update($nama, $newNama);
    }

    public function DeleteKelas($nama)
    {
        $db = new Mkelas();
        echo $db->Delete($nama);
    }
}
