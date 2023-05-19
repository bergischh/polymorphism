<?php
    abstract class Biodata{
        abstract protected function nama();

        public function bio(){
            echo "Ini adalah bio saya: <br>";
            echo "Nama saya adalah ";
            echo $this->nama() . "<br>";
        }
    }
    interface namaRayon {
        public function rayon();
    }

    class satu extends Biodata implements namaRayon {
        public function nama(){
            echo "Bergisch Humaira";
        }
        public function rayon(){
            return "Berasal dari rayon Sukasari 2";
        }
    }

    class dua extends Biodata implements namaRayon{
        public function nama(){
            echo "Rainy Nur Baeti Putri";
        }
        public function rayon(){
            return "Berasal dari rayon Cicurug 3";
        }
    }

    class tiga extends Biodata implements namaRayon{
        public function nama(){
            echo "Siti Lubna Salsabila Muslimah";
        }
        public function rayon(){
            return "Berasal dari rayon Cisarua 4";
        }
    }

$satu = new satu;
$dua = new dua;
$tiga = new tiga;

echo $satu->bio();
echo $satu->rayon()  . "<br><br>" ;

echo $dua->bio();
echo $dua->rayon()  . "<br><br>" ;

echo $tiga->bio();
echo $tiga->rayon()  . "<br><br>" ;
