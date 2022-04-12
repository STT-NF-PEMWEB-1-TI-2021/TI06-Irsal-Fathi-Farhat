<?php
class Mahasiswa
{
    var $nim;
    var $nama;
    var $prodi;
    var $thn_angkatan;
    var $ipk;

    function __construct($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function predikat_ipk()
    {
        if ($this->ipk < 2.0) return "Cukup";
        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";
        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) return "Memuaskan";
        elseif ($this->ipk >= 3.75 && $this->ipk < 4.0) return "Cum Laude";
    }
}
