<html>
<head>
<title>Covid-19 Tracker Global</title>
<link rel="shortcut icon" href="https://reiz.my.id/assets/img/akmin.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css?family=Khand&display=swap');
::-webkit-scrollbar { width: 8px; background: #fff } ::-webkit-scrollbar-thumb { background-color: #333; border-radius: 0px; }
html {
    font-family: 'Khand', sans-serif;
	overflow-x: hidden;
}
table, td, th {  
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
th {
    background-color: #333333;
    font-weight: bold;
    color: #ffffff;
}
td {
    background-color: #dddddd;
    font-weight: bold;
    color: #000000;
}
#kuning {
    color: #d1c700;
}
#hijau {
    color: #2ded33;
}
#merah {
    color: red;
}
nav{
	positon : fixed; top : 0px;
}
.logo{
    background-image: url(https://reiz.my.id/assets/img/akmin.png);
    width: 40px;
    margin: 4px 14px;
    height: 40px;
    background-size: 40px 40px;
    border: solid 2px #666;
    border-radius: 50px;
    background-color: #fff
}
.navbar-left{
    float:left;
}
.navbar-right{
    float:right;
    width:280px;
    padding-right:10px;
}
.navbar{width:auto;
    height:50px;
    background:#333;
    border-radius:2px;
}
.navbar ul{
    float:left;
    margin:0;
    padding:0;
}
.navbar li{
    float:left;
    list-style:none;
    margin:0;
    padding:0;
}
.navbar li a, .navbar li a:link {
    float: left;
    padding: 17px 12px;
    color: #fff;
    text-decoration: none;
    position: relative;
    font-family: sans-serif;
    font-size: 14px;
}
.navbar li a:hover{
    background: #ddd;
    color: #444;
}
.navbar li li a, .navbar li li a:link {
    text-decoration: none;
    font-size: 16px;
    background: #444;
    color: #fff;
    width: 108px;
    padding: 0px 0px 0 12px;
    font-size: 12px;
    line-height: 35px;
}
.navbar li li a:hover{
    background: #ddd;
    color: #444
}
.navbar li ul{
    z-index:9999;
    position:absolute;
    left:-999em;
    height:auto;
    width:120px;
    margin-top:50px;
    border:1px solid #666;
}
.navbar li:hover ul,
.navbar li li:hover ul,
.navbar li li li:hover ul{left:auto;}
.navbar li:hover{position:auto;}
li a#dropdown{
    width: 96%;
    height: 50%;
    background-color: #333333;
    padding-left :5px;
}
div img[alt="www.000webhost.com"], div img[alt='www.000webhost.com']
{ 
	      display:none;visibility:hidden;
}
</style>
</head>
<body>
<nav class="navbar">
    <div class="navbar-left"><div class="logo"></div></div>
    <div class="navbar-right">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="global.php">Global</a></li>
			<li><a href="prov.php">Provinsi</a></li>
            <li><a>More &nabla;</a>
                <ul class="dropdown-list">
                    <li><a class="dropdown" href="https://github.com/reidhosatria/Covid-19">Github</a></li>
                    <li><a class="dropdown" href="https://github.com/reidhosatria/Covid-19/issues">Report</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<h3> Data Kasus Covid-19 Di Berbagai Negara </h1>
<?php function curl($url) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); $headers   = array(); $headers[] = 'Authority: api.kawalcorona.com'; $headers[] = 'Pragma: no-cache'; $headers[] = 'Cache-Control: no-cache'; $headers[] = 'Upgrade-Insecure-Requests: 1'; $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'; $headers[] = 'Sec-Fetch-Mode: navigate'; $headers[] = 'Sec-Fetch-User: ?1'; $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8,application/signed-exchange;v=b3'; $headers[] = 'Sec-Fetch-Site: none'; $headers[] = 'Accept-Language: en-US,en;q=0.9,id;q=0.8'; curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); $exec = curl_exec($ch); return $exec; curl_close($ch); }
    $apidunia    = "https://api.kawalcorona.com/";
    $dunia  = curl($apidunia);
    $tampildunia   = json_decode($dunia, true);
	$page    = count($tampildunia);
	echo "<table>
	      <tr>
	      <th>Negara                   </th>
	      <th id='kuning'>Positif      </th>
	      <th id='hijau'>Sembuh        </th> 
	      <th id='merah'>Kematian      </th>
	      </tr>";
?>
<?php for ($i=0; $i <= $page; $i++) { ?>
  <tr>
      <td>             <?php echo  $tampildunia[$i]['attributes']['Country_Region'];           ?></td>
      <td id='kuning'> <?php echo  $tampildunia[$i]['attributes']['Confirmed'];                ?></td>
      <td id='hijau'>  <?php echo  $tampildunia[$i]['attributes']['Recovered'];                ?></td>
      <td id='merah'>  <?php echo  $tampildunia[$i]['attributes']['Deaths'];                   ?></td>
  </tr>
<?php } ?>
</table>
<br/>
<center><text>Make With &lt;/&gt; By Reidho</text></center>
</body>
</html>