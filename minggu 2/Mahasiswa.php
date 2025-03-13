<?php

class Mahasiswa {
    public $nim,$nama;

    function setData($nim,$nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function getData()
    {
        return ['nim' => $this->nim,
                'nama' => $this->nama];
    }
}
?>
