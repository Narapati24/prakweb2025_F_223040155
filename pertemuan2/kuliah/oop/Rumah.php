<?php
// Membuat kelas Rumah
class Rumah {
  public $warna;
  public $jumlahKamar;
  public $alamat;

  // Konstruktor untuk menginisialisasi properti
  public function __construct($warna, $jumlahKamar, $alamat) {
    $this->warna = $warna;
    $this->jumlahKamar = $jumlahKamar;
    $this->alamat = $alamat;
  }

  public function kunciPintu() {
    return "Pintu terkunci!";
  }

  public function gantiWarna($warnaBaru) {
    $this->warna = $warnaBaru;
    return "Warna rumah telah diubah menjadi " . $this->warna;
  }
}

function pasangListrik(Rumah $rumah) {
  return "Listrik telah dipasang di rumah dengan alamat: " . $rumah->alamat;
}

// Membuat objek dari kelas Rumah
$rumahSaya = new Rumah("Biru", 3, "Jl. Contoh No. 123");
echo "Warna rumah saya: " . $rumahSaya->warna;
echo "<br>";
echo "Jumlah kamar di rumah saya: " . $rumahSaya->jumlahKamar;
echo "<br>";
echo "Alamat rumah saya: " . $rumahSaya->alamat;
echo "<br>";
echo $rumahSaya->kunciPintu();
echo "<br>";
echo $rumahSaya->gantiWarna("Merah");
echo "<br>";


// Membuat objek dari kelas Rumah
$rumahTetangga = new Rumah("Hijau", 4, "Jl. Contoh No. 456");
echo "Warna rumah tetangga: " . $rumahTetangga->warna;
echo "<br>";
echo "Jumlah kamar di rumah tetangga: " . $rumahTetangga->jumlahKamar;
echo "<br>";
echo "Alamat rumah tetangga: " . $rumahTetangga->alamat;
echo "<br>";
echo $rumahTetangga->kunciPintu();
echo "<br>";


// Memasang listrik di rumah tetangga
echo pasangListrik($rumahTetangga);
echo "<br>";

?>