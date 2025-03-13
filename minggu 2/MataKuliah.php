<?php

class MataKuliah
{
    public $kode;
    public $nama;
    public $sks;

    function setData($kode, $nama, $sks)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->sks = $sks;
    }
}