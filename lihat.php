<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt","r"); //akan membaca isi
echo "<table border=0>";
while ($isi = fgets($fp,80))
{
$pisah = explode("|",$isi); //variabel explode untuk memisahkan
echo "<tr><td>nama </td><td>: $pisah[0]</td></tr>";
echo "<tr><td>alamat </td><td>: $pisah[1]</td></tr>";
echo "<tr><td>email </td><td>: $pisah[2]</td></tr>";
echo "<tr><td>status </td><td>: $pisah[3]</td></tr>";
echo "<tr><td>komentar </td><td>: $pisah[4]</td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a href=index.html> Klik Disini </a>Isi Form Buku Tamu";
?>