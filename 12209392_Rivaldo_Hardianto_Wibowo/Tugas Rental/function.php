<?php
    class rental {
        protected $pajak = 10000;
        public $nama;
         public  $member = ['rival','kai','ugway','pou'];
         public  $hari;
        protected $diskon = 0.05;
         private  $scoopy,
                $aerox,
                $nmax,
                $soul;

    public function setharga($jenis1,$jenis2,$jenis3,$jenis4) {
        $this->scoopy = $jenis1;
        $this->aerox = $jenis2;
        $this->nmax = $jenis3;
        $this->soul = $jenis4;
    }        
    public function getharga(){
        $data['scoopy'] = $this->scoopy;
        $data['aerox'] = $this->aerox;
        $data['nmax'] = $this->nmax;
        $data['soul'] = $this->soul;
        return $data;
    }
    public function hari($hari) {
        $this->hari = $hari;
    }
    }

    class peminjaman extends rental {
        public function hargarental(){
                 $harga = $this->getharga();
        $hargarental = $harga[$this->jenis] * $this->hari;
        $hargatotal = $hargarental + $this->pajak;

        if (in_array($this->nama, $this->member)) {
            $hargatotalmem = $hargarental * $this->diskon;
            $hargarental = $this->diskon;
        }
        return $hargatotal;
        }

    public function cetakpeminjaman(){
        $totalharga = $this->hargarental();

       if (in_array($this->nama, $this->member)) {
            echo $this->nama . " adalah member dan mendapatkan diskon sebesar 5% <br>";
            echo "Jenis motor yang disewa : ". $this->jenis . "<br>";
            echo "Waktu rental : " . $this->hari . "hari <br>";
            echo "Totak yang harus dibayar adalah : " . number_format($totalharga);
       }else {
        echo "Nama : " . $this->nama ;
        echo "Jenis motor yang disewa : ". $this->jenis . "<br>";
        echo "Waktu rental : " . $this->hari . "hari <br>";
        echo "Totak yang harus dibayar adalah : " . number_format($totalharga);
       }
    }
}

   
?>