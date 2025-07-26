<?php
$meyveler= array("Muz", "Elma", "Kiraz", "Karpuz", "Portakal", "Kavun");
echo $meyveler [1];
echo "<br>";
echo $meyveler [3];
echo "<hr>";
echo count ($meyveler);
echo "<hr>";
$saydir= count ($meyveler);
echo $saydir;
echo "<hr>";
for($i=0; $i<$saydir; $i++)
{
    echo $meyveler [$i];
    echo "<br>";

}
echo "<hr>"; 
for($i=5; $i>= 0; $i--)
{
    echo $meyveler[$i];
    echo "<br>";
}
echo "<hr>";

$sayisalDizi = array(10, 20, 30, 40);
echo $sayisalDizi[0];
echo "<hr>";
//array_push($sayisalDizi, 50);  /Yeni Veri ekleme
//unset($sayisalDizi [1]); /var olan bir indeksi silme
print_r($sayisalDizi); //Dizinin içeriğini verir.
echo "<hr>";
array_push($sayisalDizi, 50);
print_r($sayisalDizi); 
echo "<hr>";
$mixdizi = array ("Meyve", 20, 2.40);
print_r ($mixdizi);
echo "<hr>";

$anahtarDizi =array("Ali"=> "31", "Yeliz"=>"40", "Mehmet"=> "51");
echo $anahtarDizi ["Ali"];
echo "<br>";
echo "Ali'nin Yaşı:" .$anahtarDizi["Ali"];

$anahtarDizi ["Veli"]=60;
echo "<br>";
print_r ($anahtarDizi);
echo "<hr>";
unset ($anahtarDizi["Yeliz"]); //Silme İşlemi
print_r ($anahtarDizi);
echo "<hr>";


?>
