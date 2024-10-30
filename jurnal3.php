<!-- nama : Maggie -->
<?php

$buku = [
    [
        "judul" => "DragonBall",
        "penulis" => "fajar"],
    [
        "judul" => "Naruto",
        "penulis" => "respa"],
        
 ];
function viewbuku($bukuArray){
    echo "<table border = '1'>";
    echo  "<thead><tr><th>Judul</th><th>Penulis</th></tr></thead>";
    echo "<tbody>";
    foreach($bukuArray as $item){
        echo "<tr>";
        echo "<td>".$item['judul']."</td>";
        echo "<td>".$item['penulis']."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
}
viewbuku($buku);
function isibuku(&$buku,$judul,$penulis){
    $buku[] = 
        [
            "judul" => $judul,
            "penulis" => $penulis];
}
echo"Menampilkan Data Awal  NO GPT <br>";
isibuku($buku,"Onepiece","oda");
viewbuku($buku);
function hapusbuku(&$buku, $judul){
    foreach($buku as $index => $item){
        if($item['judul'] == $judul){
            unset($buku[$index]);
    
        }
    }
}
echo"<br> Menambah Buku  NO GPT<br>";
hapusbuku($buku,"Onepiece");
viewbuku($buku);
echo "<br> Mengahpus Buku  NO GPT<br>";

function mencaribuku(&$buku, $judul){
    foreach ($buku as $item){
        if($item["judul"] == $judul){
            return $item;
        }
    }
    return null;

}
$produkKetemu = mencaribuku($buku,"Naruto");
if($produkKetemu){
    echo "produk ditemukan yang kamu cari : ". $produkKetemu['judul'];
}else{
    echo "Produk tidak ditemukan";
}
?>