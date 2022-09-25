<?php

class produk {
    private $name = "Glenn Fredly",
           $price = "5000",
           $discount;
           function getPrice() {
        }
        function setPrice() {
            return "price : " . $this->price + $this->price * 0.1 . "</br>";
        }
        function getName() {
        }
        function setName() {
            return "name : " . $this->name . "<br/>";
        }
        function getDiscount() {
        }
        function setDiscount() {
        return "discount : " . $this->price - $this->price * 0.05 . "</br>";
        }
    }

class CDMUSIC extends produk {
    public $artist = "artist",
           $genre = "genre";   
            function getArtist() {
            }
            function setArtist() {
            return "artis : " .$this->artist;
            }
            function getGenre() {
            }
            function setGenre() {
            return "genre : " .$this->genre;
            }
    }

$produkbaru = new produk();
echo "CD MUSIC </br>";
echo $produkbaru->setName ();
echo $produkbaru->setPrice();
echo $produkbaru->setDiscount();

class CDRACK extends produk {
    public $capacity = "capacity",
            $genre = "model";
            function getCapacity() {
            }
            function setCapasity() {
            return "artis : " .$this->artist;
            }
            function getModel() {
            }
            function setModel() {
            return "genre : " .$this->genre;
            }
    }
    
$beli_cdr = new CDRack();
echo "CD RACK </br>";
echo "Kapasitas : " . $beli_cdr->getCapacity() . "<br/>";
echo "Model : " . $beli_cdr->getModel() . "<br/>";
echo "Mohon maaf anda tidak mendapatkan Discount <br/>";
echo "Total Harga : Rp." . $beli_cdr->getPrice() . ",-<br/>Harga diatas sudah
termasuk ppn sebesar 15% dan tidak mendapatkan discount";

