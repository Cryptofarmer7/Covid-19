<html>
<head>
<title>Covid-19 Tracker</title>
<link rel="shortcut icon" href="https://reiz.my.id/assets/img/akmin.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  font-family: 'Khand', sans-serif;
}
@import url('https://fonts.googleapis.com/css?family=Khand&display=swap');
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 500px;
}

th, td {
  padding: 15px;
}
div img[alt="www.000webhost.com"], div img[alt='www.000webhost.com']
{ display:none;visibility:hidden;
}
</style>
</head>
<body>
<br/>
<h3> Data Kasus Covid-19 di Indonesia </h1>
<?php
function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $headers   = array();
    $headers[] = 'Authority: api.kawalcorona.com';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $exec = curl_exec($ch);
    return $exec;
    curl_close($ch);
}
    $api    = "https://api.kawalcorona.com/indonesia/";
    $njiir  = curl($api);
    $json   = json_decode($njiir, true);
echo "<table>
  <tr>
      <th>Negara        </th>
      <th>Positif       </th>
      <th>Sembuh        </th> 
	  <th>Kematian      </th>
  </tr>";
?>
  <tr>
      <td><?php echo  $json[0]['name'];         ?></td>
      <td><?php echo  $json[0]['positif'];      ?></td>
      <td><?php echo  $json[0]['sembuh'];       ?></td>
      <td><?php echo  $json[0]['meninggal'];    ?></td>
  </tr>
 </table>
 <br/>
<h3> Data Kasus Covid-19 Secara Global </h1>
<?php
function curl1($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $headers   = array();
    $headers[] = 'Authority: api.n45ht.or.id';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $exec = curl_exec($ch);
    return $exec;
    curl_close($ch);
}
    $api1    = "https://api.n45ht.or.id/v2/covid19/stats";
    $njiir1  = curl1($api1);
    $json1   = json_decode($njiir1, true);
echo "<table>
  <tr>
      <th>Positif       </th>
      <th>Sembuh        </th> 
	  <th>Kematian      </th>
  </tr>";
?>
  <tr>
      <td><?php echo  $json1['confirmed'];         ?></td>
      <td><?php echo  $json1['recovered'];      ?></td>
      <td><?php echo  $json1['deaths'];       ?></td>
  </tr>
 </table>
 <br/>
 <h3> Data Kasus Covid-19 Di Berbagai Negara </h1>
<?php
function curl2($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    $headers   = array();
    $headers[] = 'Authority: api.n45ht.or.id';
    $headers[] = 'Pragma: no-cache';
    $headers[] = 'Cache-Control: no-cache';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8,application/signed-exchange;v=b3';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $exec = curl_exec($ch);
    return $exec;
    curl_close($ch);
}
    $api2    = "https://api.n45ht.or.id/v2/covid19/country";
    $njiir2  = curl2($api2);
    $json2   = json_decode($njiir2, true);
	$page    = count($json2);
echo "<table>
  <tr>
      <th>Kode          </th>
      <th>Negara        </th>
      <th>Positif       </th>
      <th>Sembuh        </th> 
	  <th>Kematian      </th>
  </tr>";
?>
<?php for ($i=0; $i < $page; $i++) { ?>
  <tr>
      <td><?php echo  $json2[0]['countryCode'];           ?></td>
      <td><?php echo  $json2[0]['countryName'];         ?></td>
      <td><?php echo  $json2[0]['confirmed'];          ?></td>
      <td><?php echo  $json2[0]['recovered'];      ?></td>
      <td><?php echo  $json2[0]['deaths'];       ?></td>
  </tr>
<?php } ?>
 </table>
 <br/>
</body>
</html>
