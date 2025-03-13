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
        $mhs = [
            'nim' => $this->nim,
            'nama' => $this->nama
        ];
        return $mhs;
    }

    function printData($data = null){
        if (!is_null($data))
        {
            foreach ($data as $key => $value)
            {
                echo $value;
            }            
        } else {
            echo "data kosong";
        }
    }

    function dataMatkul($namaMatkul,$sks){
        $data = [
            'nim'=> $this->nim,
            'namaMatkul'=> $namaMatkul,
            'sks'=> $sks
        ];

        return $data;
    }
}