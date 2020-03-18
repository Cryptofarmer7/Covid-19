<html>
<head>
<title>Covid-19 Tracker</title>
<link rel="shortcut icon" href="https://reiz.my.id/assets/img/akmin.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br/>
<h1> Data Kasus Covid-19 di Indonesia </h1>
<h6> Data Akan Selalu Di Update Secara Otomatis </h6>
<br/>
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
echo "<table class='table table-bordered'>
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
      <td><?php echo  $json[0]['sembuh'];         ?></td>
      <td><?php echo  $json[0]['meninggal'];      ?></td>
  </tr>
 </table>
 <br/>
 <h1> Ringkasan Data Secara Global </h1>
 <h6> Data Akan Selalu Di Update Secara Otomatis </h6>
 <br/>
 <?php
    // ============================================== //
    $api1    = "https://api.kawalcorona.com/positif/";
    $njiir1  = curl($api1);
    $json1   = json_decode($njiir1, true);
	// ============================================== //
    $api2    = "https://api.kawalcorona.com/sembuh/";
    $njiir2  = curl($api2);
    $json2   = json_decode($njiir2, true);
	// ============================================== //
    $api3    = "https://api.kawalcorona.com/meninggal/";
    $njiir3  = curl($api3);
    $json3   = json_decode($njiir3, true);
	// ============================================== //
echo "<table class='table table-bordered'>
  <tr>
      <th>Positif       </th>
      <th>Sembuh        </th> 
	  <th>Kematian      </th>
  </tr>";
 ?>
   <tr>
      <td><?php echo  $json1['value'];         ?></td>
      <td><?php echo  $json2['value'];         ?></td>
      <td><?php echo  $json3['value'];         ?></td>
   </tr>
</table>
</body>
</html>
