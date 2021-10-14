<?php
$filecounter = "counter.txt"; //
$fileload = fopen($filecounter, "r+"); //untuk membuka file & r+ untuk membaca dan menulis di awal file
$hit = fread($fileload, filesize($filecounter)); //file size untuk ukuran file dan kita masukan nama file
echo ("<table width=250 align=center border=1 cellspacing=0 cellpadding=0
bordercolor=#0000FF><tr>"); // untuk tampilan
echo ("<td width=250 valign=middle align=center>");
echo ("<font face=verdana size=2 color=#FF0000><b>");
echo ("Anda pengunjung yang ke:");
echo ($hit);
echo ("</b></font>");
echo ("</td>");
echo ("</tr></table>");
fclose($fileload); //untuk menutup proses
$fl = fopen($filecounter,"w+"); // untuk membaca dan menulis file baru
$hit = $hit + 1;
fwrite($fl, $hit, strlen($hit));
fclose($fl); // menutup