<?php
class Dispenser
{
    protected $namaMinuman;
    protected $volume = 0;
    protected $hargaSegelas;
    private $saldo = 5000;
    private $jumlahGelas = 5;
    private $volumeGelas = 250;

    public function default(int $vol, int $saldo, int $jmlGelas, int $volgelas)
    {
        $this->volume = $vol;
        $this->saldo = $saldo;
        $this->jumlahGelas = $jmlGelas;
        $this->volumeGelas = $volgelas;
    }

    public function cetakDispenser()
    {
        echo "Volume air galon yang dimiliki " . $this->volume . "ml</br>Saldo yang dimiliki " . $this->saldo . "</br>Jumlah gelas yang dimiliki " . $this->jumlahGelas . "</br>Volume gelas yang dimiliki " . $this->jumlahGelas;
    }

    public function isiGalon(int $vol)
    {
        if ($vol > 0) {
            $this->volume = $vol;
            echo "Anda telah mengisi volume air galon sebesar " . $this->volume . "ml";
        } else {
            echo "Volume air tidak bisa kurang dari 0";
        }
    }

    public function isiGelas()
    {
        if ($this->volume >= $this->volumeGelas && $this->jumlahGelas > 0) {
            $this->jumlahGelas--;
            $this->volume = $this->volume - $this->volumeGelas;
            $this->saldo = $this->saldo + $this->hargaSegelas;
            echo "Anda telah menuangkan air kedalam gelas berukuran " . $this->volumeGelas . "ml dengan harga " . $this->hargaSegelas;
        } elseif ($this->jumlahGelas <= 0) {
            echo "Tidak ada gelas tersedia, silahkan isi ulang gelas";
        } elseif ($this->volume < $this->volumeGelas) {
            echo "Volume air galon tidak mencukupi";
        }
    }

    public function isiUlangGelas(int $gelas)
    {
        $harga = 500;
        $totalHarga = $harga * $gelas;
        if ($this->saldo >= $totalHarga && $totalHarga >= $harga) {
            $this->saldo = $this->saldo - $totalHarga;
            $this->jumlahGelas = $this->jumlahGelas + $gelas;
            echo "Anda telah melakukan isi ulang gelas sebanyak " . $gelas . " gelas dengan total harga " . $totalHarga . " atau " . $harga . "/pcs";
        } elseif ($this->saldo < $totalHarga) {
            echo "Saldo anda tidak mencukupi";
        } elseif ($totalHarga < $harga) {
            echo "Masukkan angka gelas dengan benar";
        }
    }
}

class Minuman extends Dispenser
{
    public function __construct(string $nama, int $harga)
    {
        $this->namaMinuman = $nama;
        $this->hargaSegelas = $harga;
    }
    public function cetak()
    {
        echo "Ini adalah " . $this->namaMinuman . " seharga " . $this->hargaSegelas . " per gelasnya";
    }
}
