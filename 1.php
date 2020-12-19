<?php
echo "\e[0;30;42m\t\tEverything is beautiful\e[0m\n";
echo "\e[0;032;40m//
*********************************
// Author        : SultanZio x Khatulistiwa
// Date          : 11 Des 2020
// Link Minner   : https://wp.smlxt.com/
// AutoBot Minner Capture from Burpsuite
// **********************************\e[0m\n";

$inp = readline("[+] Masukan Jumlah Users\t: ");
$pin = readline("[+] Masukan Referral\t\t: ");
$passw = readline("[+] Masukan Password\t\t: ");
for ($i=0; $i < $inp; $i++) {
    //Ngecurl pertama, Get access
  $curl1 = curl_init();
  curl_setopt($curl1, CURLOPT_URL, 'https://wp.smlxt.com/index/login/register.html');
  curl_setopt($curl1, CURLOPT_POST, true);
  curl_setopt($curl1, CURLOPT_POSTFIELDS,
$data = array('utel' => '0810'.rand(000000,999999),
    'upwd' => $passw,
    'upwd2' => $passw,
    'oid' => $pin) //Digunakan Untuk Akun Utama
  );
$pars = http_build_query($data);
parse_str($pars, $get_parse);
  curl_setopt($curl1, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest"));
  curl_setopt($curl1, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.2309.372 Safari/537.36');
  curl_setopt($curl1, CURLOPT_COOKIEJAR, "cook.txt");
  curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl1, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($curl1, CURLOPT_REFERER, 'https://wp.smlxt.com/index/login/register.html');
  $hasil = curl_exec($curl1);  
  curl_close($curl1);

  //Ngecurl kedua, AutoBuy
  $curl2 = curl_init();
  curl_setopt($curl2, CURLOPT_URL, 'https://wp.smlxt.com/index/ore/buy/id/1.html');
  curl_setopt($curl2, CURLOPT_POST, true);
  curl_setopt($curl2, CURLOPT_POSTFIELDS, $dataku = array(
    'buytime' => '336')
  );
  curl_setopt($curl2, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest"));
  curl_setopt($curl2, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.2309.372 Safari/537.36');
  curl_setopt($curl2, CURLOPT_COOKIEFILE, "cook.txt"); 
  curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl2, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($curl2, CURLOPT_REFERER, 'https://wp.smlxt.com/index/ore/buy/id/1.html');
  $hasil2 = curl_exec($curl2);  
  curl_close($curl2);
  $arr = json_decode($hasil2, true);
  sleep(3);
  if ($arr['msg'] == 'Operation successful!') {
$fp = fopen('Hasil.txt', 'a');
$upil = $get_parse['utel'];
$passwd = $get_parse['upwd'];
fwrite($fp, "$upil\n");
fclose($fp);
  echo $i+1 . ". Sukses Register and Buy Minner\n";
  echo "\e[0;035;40mID Masuk : \e[0m".($get_parse['utel']).", Password : ".($get_parse['upwd']).", REFERAL : ".($get_parse['oid'])."\n";
}
}
?>