<?php
class Shell {
    protected $ppn = 0.1;
    private $SSuper,
            $SVPower,
            $SVPowerDiesel,
            $SVPowerNitro;
    public $jumlah;
          
    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->SSuper = $tipe1;
        $this->SVPower = $tipe2;
        $this->SVPowerDiesel = $tipe3;
        $this->SVPowerNitro = $tipe4;
    }

    public function getHarga() {
        $data["ShellSuper"] = $this->SSuper;
        $data["ShellVPower"] = $this->SVPower;
        $data["ShellVPowerDiesel"] = $this->SVPowerDiesel;
        $data["ShellVPowerNitro"] = $this->SVPowerNitro;
        return $data;
    }
}

class Beli extends Shell {
    public function hargaBeli(){ 
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }

    public function cetakPembelian() {
        echo "<center>";
        echo "----------------------------------------------" . "<br>";
        echo "Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
        echo "Dengan jumlah : " . $this->jumlah . " Liter <br>";
        echo "Total yang harus anda bayar Rp. " . number_format($this->hargaBeli(), 0, '', '.') . "<br>";
        echo "----------------------------------------------";
        echo "</center>";
    }
}
?>