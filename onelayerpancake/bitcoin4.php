<?php
session_start();

$askedformore = 0;
$nextpage = 0;
$lasthash = "";

$cancluster = false;
$includedthething = false;

$dumped = false;

$exampleaddress = "bc1q36y03h9ak0me88xrw8s9w6afnpqjlde0txufk23ty62h9cy8ka4srwm8w0";
if (isset($_GET['cryptowallet'])) {

  $exampleaddress = $_GET['cryptowallet'];


}

?>

<style type='text/css'>

html,
body {
	<? echo $maxheight ?>
}

h1 {

color: white;

}

a {

  
  text-decoration: none;

}

a:link {
  color: white;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: white;
  text-decoration: none;
}

/* mouse over link */
a:hover {
  color: yellow;
  text-decoration: none;
}

/* selected link */
a:active {
  color: red;
  text-decoration: none;
}


body {
	margin: 0;
 
	background: linear-gradient(45deg, #000000, #000000);
	font-family: sans-serif;
	font-weight: 100;
}

.container1 {
	position: absolute;
	top: 300px;
	left: 800px;
	transform: translate(-600px, 320px);
}
.container2 {
	position: absolute;
	top: 150px;
	left: 800px;
	transform: translate(-300px, 0);
}

.table1 {
	width: 600px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.table2 {
	width: 1300px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}
thead th {
background-color: #55608f;
}

.chugga {

background-color: #55608f;
}


.chugga3 {

background-color: 'black';
color:white;
}



tbody tr:hover {
background-color: rgba(255,255,255,0.3);
}

tbody td { 
    position:relative; 
    
}

p {
    color:white;
}

label {
    color:white;
}
footer {
    color:white;
}
.bugga {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 16px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-color: #0e0e10;
  padding: 0.7em 2em;
  border-radius: 65px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: white;
}

.bugga .text {
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: white;
  color: white;
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
}

.bugga:hover {
  background-image: linear-gradient(-45deg, #bdd6ff, #bdd6ff);
  box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
  color:black;
}

.bugga:hover .text {
  background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
}

.bugga2 {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 16px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-color: #bdd6ff;
  padding: 0.7em 2em;
  border-radius: 65px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: black;
  text-align:center;


  transform: translate(0, 20px);

}

.modulomo {
	font-family: sans-serif;
padding:5px;
width:500px;
height:150px;
background-color:#546896;
    
	transform: translate(0, -50px);
}
.bugga2 .text {
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: white;
  color: black;
  background-image: linear-gradient(45deg, #bdd6ff, #bdd6ff);
}

.bugga2:hover {
  background-image: linear-gradient(-45deg, #7aadff, #7aadff);
  box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
  color:black;
}

.bugga2:hover .text {
  background-image: linear-gradient(-45deg, #7aadff, #7aadff);
}

.txtarae {
resize: none;
text-align:center;

}

.prettytext {

    


}

/*

.bugga {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 16px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-color: #0e0e10;
  padding: 0.7em 2em;
  border-radius: 65px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: white;
}

.bugga .text {
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: white;
  color: white;
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
}

.bugga:hover {
  background-image: linear-gradient(-45deg, #bdd6ff, #bdd6ff);
  box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
  color:black;
}

.bugga:hover .text {
  background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
}


*/


/*

.bugga {
  border: 5em;
  cursor: pointer;
  outline: none;
  font-size: 16px;
  -webkit-transform: translate(0);
  transform: translate(0);
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
  padding: 0.7em 2em;
  border-radius: 65px;
  box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
  -webkit-transition: box-shadow 0.25s;
  transition: box-shadow 0.25s;
  color: white;
}

.bugga .text {
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-image: linear-gradient(45deg, #4568dc, #b06ab3);
}

.bugga:after {
  content: "";
  border-radius: 18px;
  position: absolute;
  margin: 4px;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  background: #0e0e10;
}

.bugga:hover {
  background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
  box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
}

.bugga:hover .text {
  background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
}
*/
/*


tbody td:hover:before {
content: "";
position: absolute;
left: 0;
right: 0;
top: -9999px;
bottom: -9999px;
background-color: rgba(255,255,255,0.2);
z-index: -1;
}

*/

</STYLE>
<?php
function areAllElementsIdentical($array) {
  // Check if the array is empty
  if (empty($array)) {
      return false;
  }

  // Compare the first element of the array to all other elements
  $firstElement = $array[0];
  for ($i = 1; $i < count($array); $i++) {
      if ($array[$i] !== $firstElement) {
          return false;
      }
  }

  // If all elements are the same as the first element, return true
  return true;
}

function updateAddressAsSearched($wallet, $pdo) {

  //$sql = 'UPDATE `address_helped_cluster` SET `address` = :address, `searched` = :searched';//1670475715

  $sql = 'UPDATE `address_helped_cluster` SET `searched` = :searched WHERE `address` LIKE :address';//1670475715


//$sql = 'UPDATE registration SET firstName="bob" WHERE firstName LIKE "%test%"';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':searched', 1);
  $stmt->execute();
  

}


function addAddressAsSearched($wallet, $pdo) {

  
  $sql = 'INSERT INTO `address_helped_cluster` SET `address` = :address, `searched` = :searched';
  
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':searched', 1);
  $stmt->execute();
  

}


function updateSearchedAddresses($wallet, $pdo) {
$finalmsg = "BLAH";

  $sqls = 'SELECT `address`,`searched` FROM `address_helped_cluster` WHERE `address` LIKE "%'.$wallet.'%"';

 $searchedness1 = -1;
  $result = $pdo->query($sqls);
  $counts = 0;
  foreach ($result as $entry) {
  
  
      $searchfound = $entry['searched'];
  
      $foundanyentry = 1;
  

      if ($searchfound === "1") {

        $searchedness1 = 1;
      }
      if ($searchfound === "0") {
      
        $searchedness1 = 0;
      }
  
    $counts = $counts + 1;
  }


  if ($searchedness1 == 0) {

    $finalmsg = "NEED";
    
  }


  if ($searchedness1 == 1) {

    $finalmsg = "NONEED";
    
  }
  if ($counts === 0) {
    $finalmsg = "MUSTADD";
    }

return $finalmsg;

}

function checkIfAddressSearchedWallets($wallet, $pdo) {

$searchcheck = -1;

$searchfound = -1;

$foundanyentry = 0;

$sqls = 'SELECT `address`,`searched` FROM `address_helped_cluster` WHERE `address` LIKE "%'.$wallet.'%"';


  
$result = $pdo->query($sqls);
$counts = 0;
foreach ($result as $entry) {


    $searchfound = $entry['searched'];

    $foundanyentry = 1;


  $counts = $counts + 1;
}

/*
if ($counts === 0) {


  $searchcheck = 0;
} else {


  $searchcheck = 1;
}
*/

if ($counts === 0) {
  $searchcheck = -1;
}

return $searchfound;

}

function addWalletToEverything($wallet, $whichcluster, $pdo) {
 
 
  if ($clusterkey === -1) {


    return;
  }

  if ($clusterkey === 0) {


    return;
  }


  
  $sql = 'INSERT INTO `addresses_in_clusters` SET `address` = :address, `clusterkey` = :clusterkey;INSERT INTO `address_helped_cluster` SET `address` = :address, `searched` = :searched';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':clusterkey', $whichcluster);
  $stmt->bindValue(':searched', 0);
  $stmt->execute();
  
  


}

function addWalletToSearchedWallets2($wallet, $pdo, $searched) {



  
  
    $sql = 'INSERT INTO `address_helped_cluster` SET `address` = :address, `searched` = :searched';
  
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':address', $wallet);
    $stmt->bindValue(':searched', $searched);
    $stmt->execute();
    
  
  }
function addWalletToSearchedWallets($wallet, $pdo, $searched) {


$updatedOrAdded = 0;

$checksearch = checkIfAddressSearchedWallets($wallet, $pdo);



if ($checksearch === -1) {



  $sql = 'INSERT INTO `address_helped_cluster` SET `address` = :address, `searched` = :searched';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':searched', $searched);
  $stmt->execute();
  
$updatedOrAdded = 1;
}


if ($checksearch === 0) {



  $sql = 'UPDATE `address_helped_cluster` WHERE `address` = "'.$wallet.'" SET `address` = :address, `searched` = :searched';//1670475715


  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':searched', $searched);
  $stmt->execute();
  
$updatedOrAdded = 1;
}
/*
if ($updatedOrAdded === 0) {


  $sql = 'INSERT INTO `address_helped_cluster` SET `address` = :address, `searched` = :searched';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':searched', 0);
  $stmt->execute();
  
$updatedOrAdded = 1;




}
*/







}
function updateWalletAsSearched($wallet, $pdo) {



  $sql = 'UPDATE `address_helped_cluster` WHERE `address` = "'.$wallet.'" SET `address` = :address, `searched` = :searched';//1670475715


  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $wallet);
  $stmt->bindValue(':searched', 1);
  $stmt->execute();
  

}
function addWalletToCluster($clustermember, $clusterkey, $pdo) {


  if ($clusterkey === -1) {


    return;
  }

  if ($clusterkey === 0) {


    return;
  }
    

  $sql = 'INSERT INTO `addresses_in_clusters` SET `address` = :address, `clusterkey` = :clusterkey';

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':address', $clustermember);
  $stmt->bindValue(':clusterkey', $clusterkey);
  $stmt->execute();
  
  

}

function makeNewCluster($pdo) {

$newclusterkey = -1;


$sqls2 = 'SELECT * FROM `clusters`';

$result2 = $pdo->query($sqls2);
$counts2 = 0;

$biggestvalue = 0;
foreach ($result2 as $entry) {
  $counts2 = $counts2 + 1;

//if ($entry['id']) {



//$newclusterkey = $entry['id'];


$currentid = $entry['id'];

if ($currentid > $biggestvalue) {
  $biggestvalue = $currentid;
}


//}






}






$sqls = 'SELECT LAST_INSERT_ID() FROM `clusters`';


  
$result = $pdo->query($sqls);
$counts = 0;
foreach ($result as $entry) {
  $counts = $counts + 1;

//if ($entry['id']) {



//$newclusterkey = $entry['id'];





//}






}


if ($newclusterkey === -1) {

if ($counts2 > 0) {

 $newclusterkey = $biggestvalue + 1;

}

}



if ($counts === 0) {

$newclusterkey = 1;



} else {


if ($newclusterkey === -1) {
  foreach ($result as $entry) {
 
  
  
  $newclusterkey = $entry['id'];
  
  
  
  
  
  //}
  
  
  
  
  
  
  }

}

}






if ($newclusterkey === -1) {

} else {

$sql = 'INSERT INTO `clusters` SET `clusterkey` = :clusterkey, `active` = :active, `root` = :unknown';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':clusterkey', $newclusterkey);
$stmt->bindValue(':active', 1);
$stmt->bindValue(':unknown', "UNKNOWN");
$stmt->execute();




}








return $newclusterkey;

}


function getClusterKeyAndSearchednessFromWallet($wallet, $pdo) {

$clusterkeys = "";
$searchednessss = "";
$sql = "SELECT addresses_in_clusters.clusterkey, address_helped_cluster.searched
FROM addresses_in_clusters
INNER JOIN address_helped_cluster
ON addresses_in_clusters.address = address_helped_cluster.address
WHERE addresses_in_clusters.address = '".$wallet."';";

$reults = $pdo->query($sql);
$count = 0;
foreach($reults as $resuo) {
$count = $count + 1;
  $clusterkeys = $resuo['clusterkey'];
  $searchednessss = $resuo['searched'];


}





$finalarray = array();
array_push($finalarray, $clusterkeys);
array_push($finalarray, $searchednessss);
array_push($finalarray, $count);

  return $finalarray;
}

function checkIfAddressIsInKnownClusters($addressOfCluster, $pdo) {

  $addresslocated = false;
  
  
  if ($pdo === null) {

    return false;
  }
  
//$sql2 = 'SELECT `id`,`wallet`,`note` FROM `new_walletnotes` WHERE `wallet` LIKE "%'.$walletgiven.'%"';

//$sql = 'SELECT `address`,`clusterkey` FROM `addresses_in_clusters` WHERE `address`="%'.$addressOfCluster.'%"';
$sql = 'SELECT `address`,`clusterkey` FROM `addresses_in_clusters` WHERE `address` LIKE "%'.$addressOfCluster.'%"';

  $result = $pdo->query($sql);
  //$result = $pdo->query($sql2);
  
  
    
  
  
  
  
  $count = 0;
  foreach ($result as $entry) {
  $count = $count + 1;
  
      if ($entry['address']) {
  
  
  
          }
  
          if ($entry['clusterkey']) {
  
              }
                         
  
  }
  
  if ($count === 0) {
  
  
    $addresslocated = false;
  } else {
    $addresslocated = true;
  }
  
  return $addresslocated;
  }


  function getClusterFromAddress($addressOfCluster, $pdo) {

    $clusternum = -45;
    
    
    if ($pdo === null) {
  
      return false;
    }
    
  //$sql2 = 'SELECT `id`,`wallet`,`note` FROM `new_walletnotes` WHERE `wallet` LIKE "%'.$walletgiven.'%"';
  
  //$sql = 'SELECT `address`,`clusterkey` FROM `addresses_in_clusters` WHERE `address`="%'.$addressOfCluster.'%"';
  $sql = 'SELECT `address`,`clusterkey` FROM `addresses_in_clusters` WHERE `address` LIKE "%'.$addressOfCluster.'%"';
  
    $result = $pdo->query($sql);
    //$result = $pdo->query($sql2);
    
    
      
    
    
    
    
    $count = 0;
    foreach ($result as $entry) {
    $count = $count + 1;
   
    
           $clusternum = $entry['clusterkey'];       
    
    }
  
    
    return $clusternum;
    }
  
  
function dumpeverything($wallet, $lastoffset, $lasthash, $page, $pdo) {

    $specialcolor = "#bdd6ff";
  
    $changedwallet = false;

$clustermembers = array();





/*
        if (isset($_POST['lasthash'])) {
     

$lasthash = isset($_POST['lasthash']);


        }*/
/*

    if (isset($_POST['cryptowallet'])) {
     
if ($wallet === $_POST['cryptowallet']) {



} else {


    echo "<p>RELETE HASH</p>";


    $lasthash = "";
    $page = 0;
    $changedwallet = true;
}

}

*/





  require_once '../keys/storage.php';
  
  $reject = false;
  $lastknowntxid = "";
  
  
  $url3 = "https://mempool.space/api/address/".$wallet;
  
  
  $parameters3 = [];
  
  
  
  $headers = [
    'Accepts: application/json',
    'Accepts-Encoding: deflate, gzip'
  ];
  
  
  
  $qs3 = http_build_query($parameters3); // query string encode the parameters
  $request3 = "{$url3}?{$qs3}"; // create the request URL
  
  
  
  $curl3 = curl_init(); // Get cURL resource
  
  curl_setopt_array($curl3, array(
    CURLOPT_URL => $request3,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
  ));
  
  $response3 = curl_exec($curl3); // Send the request, save the response
  
  $walletinfo = json_decode($response3, true);
  
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  echo "<BR>";
  $chainstats = $walletinfo['chain_stats'];
  
  //echo "WALLET CHECK SUCCEED";
  //echo "<BR>";
  //echo "<BR>";  
  
  //echo "<DIV style='width:300px;background-color:#55608f;color:white;font-size:15px;'>";
  
  //echo $walletinfo['address'];
  //echo "<BR>";
  //echo "<BR>";

  $satoshiiii = 100000000;
  $num1 = $chainstats['spent_txo_sum'];
  $moneysent = $num1 / $satoshiiii;
  
  $num3 = $chainstats['funded_txo_sum'];
  $moneygained = $num3 / $satoshiiii;
  
  /*
  echo "Wallet received: ";
  echo $chainstats['funded_txo_count'];
  echo " btc <BR>";
  
  echo "Incoming tx count: ";
  echo $moneygained;
  echo "<BR>";
  
  echo "spent_txo_count: ";
  echo $chainstats['spent_txo_count'];
  echo "<BR>";
  
  echo "Wallet sent: ";
  echo $moneysent;
  echo " btc <BR>";
  
  echo "Outgoing tx count: ";
  echo $chainstats['tx_count'];
  echo "<BR>";*/
  $balances = $moneygained - $moneysent;
  //echo "Balance: ";
  //echo $balances;
  //echo "<BR>";
  
 // echo "</DIV>";
  



 //$sql2z = 'SELECT * FROM `new_walletnotes` WHERE `wallet`="' . $wallet. '"';
 //$sql2z = 'SELECT * FROM `new_walletnotes`';





//$ress = $pdo->query($sql2z);

  $newinfoaboutwallet = checkWallet($wallet, $pdo);
  
  echo "<p>".$newinfoaboutwallet."</p>";
  
  
  if ($chainstats['tx_count'] > 25) {
  
  
   // echo "<BR> there are more than 25 transactions. you will need to load more to see them all."; // - 0.00112662
  }
  
  echo "</DIV>";
  
  
  $offset = $lastoffset;
  
  
   
  

    $offset = $offset + 25;
  
  
  
  $append = "";
  if ($lasthash !== "") {
$append = $lasthash;

  }
  
  $url2 = "https://mempool.space/api/address/".$wallet."/txs/chain/".$append; // chain?last_seen_txid=25 ... ????
  $parameters2 = [];
  
  
  
  $bonushtml = "";
  
  $qs2 = http_build_query($parameters2); // query string encode the parameters
  $request2 = "{$url2}?{$qs2}"; // create the request URL
  
  $curl2 = curl_init(); // Get cURL resource
  
  curl_setopt_array($curl2, array(
    CURLOPT_URL => $request2,            // set the request URL
    CURLOPT_HTTPHEADER => $headers,     // set the headers 
    CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
  ));
  
  $response2 = curl_exec($curl2); // Send the request, save the response
  
  $txinfo = json_decode($response2, true);
  
  
  $transactioncount = 0;
  
  $totalgained = 0;
  $totalsent = 0;
  
  //echo " YOU LOOKED UP THIS WALLET: ".$wallet."<BR>";
  echo "<BR>";


/*

.whatever {


height:500px;
width:500px;
background-color:blue;






}





echo "<DIV class='whatever'>";
echo " CONTENT";
echo "</DIV>";
*/




echo '<div class="container2">';

if (isset($_POST["cryptowallet"])) {

$exampleaddress = $_POST["cryptowallet"];

    include  __DIR__ . '/templates/bitcoin2.html.php';
    $includedthething = true;

} else {



}

if (isset($_GET["cryptowallet"])) {

  $exampleaddress = $_GET["cryptowallet"];
  
      include  __DIR__ . '/templates/bitcoin2.html.php';
      $includedthething = true;
  
  } else {
  
  
  
  }
  


echo '        <table class="table1">';
echo '              <thead>';

echo '                 <tr>';
echo '                   <th>Wallet address</th>';
echo '                    <th>'.$wallet.'</th>';
echo '                    <th></th>';
echo '                 </tr>';


echo "  <tr>";
echo " <td>Balance</td>";
echo " <td>".$balances."</td>";
echo " <td></td>";

echo "  </tr>";

echo "  <tr>";
echo " <td>Received</td>";
echo " <td>".$moneygained."</td>";
echo " <td></td>";

echo "  </tr>";

echo "  <tr>";
echo " <td>Sent</td>";
echo " <td>".$moneysent."</td>";
echo " <td></td>";

echo "  </tr>";

echo "  <tr>";
echo " <td>Total in:</td>";
echo " <td>".$chainstats['funded_txo_count']."</td>";
echo " <td></td>";

echo "  </tr>";

echo "  <tr>";
echo " <td>Total out</td>";
echo " <td>".$chainstats['spent_txo_count']."</td>";
echo " <td></td>";

echo "  </tr>";





  echo '             </tbody>';
  echo '         </table>';
  echo '         </div>';






  $columncount = 3;


echo '<div class="container1">';
echo '        <table class="table2">';/*
echo '              <thead>';

echo '                 <tr>';
echo '                   <th>Incoming funds</th>';
echo '                    <th>Outgoing funds</th>';
echo '                    <th>Notes/Flags</th>';
echo '                 </tr>';

echo '             </thead>';*/
echo '              <tbody>';
// 1wiz18xYmhRX6xStj2b9t1rwWX4GKUgpv


echo "  <tr>";
echo ' <td  style="background-color:black;color:white;font-size:22px;" colspan="'.$columncount.'"><b>';

  

if ($chainstats['tx_count'] > 25) {


$pagenumber = 25;
$pagemultiplier = 1;
if (isset($_POST['page'])) {


    $pagemultiplier = $_POST['page'];

    $pagemultiplier = $pagemultiplier + 1;
    $pagenumber = $pagenumber * $pagemultiplier;

  }
  
  if ($changedwallet === true) {
    $pagemultiplier = 1;
    $pagenumber = 1;

  }

  $totalpages = $chainstats['tx_count'] / 25;
  $totalpages = round($totalpages, 0);



  

    echo "<p>Showing 25 of ".$chainstats['tx_count']." Page ".$pagemultiplier." of ".$totalpages."</p>";


echo "<script>";
echo "

document.getElementById('lastpage').value = '".$pagemultiplier."';


";

echo "</script>";






} else {

    $totalpages = $chainstats['tx_count'] / 25;
    $totalpages = round($totalpages, 0);
  
    echo "<p>Showing ".$chainstats['tx_count']." of ".$chainstats['tx_count']." transactions. </p>";


}

echo "</b></td>";

echo "  </tr>";






  foreach($txinfo as $txn)// we are looking at the array of all of the addresses on the left side of mempool
  {
  $additionalFinalInfoRightSide = "";
  $additionalFinalInfoLeftSide = "";
  $amountaffected = 0;
  $direction = 0;
  
  $lastknowntxid = $txn['txid'];
 // echo "";
  //print_r($txn['txid']);
$columncountminusone = $columncount - 1;

$leftSideIsTheSameAddress = 0;


// lastknowntxid
  
  //echo "<BR>--------------------";
  
  
  
  
  $status = $txn['status'];
  
  $timestamp = $status['block_time'];
  
 // echo "The date of transaction: ".date(DATE_RFC2822,  $timestamp); // m/d/Y
  //echo "The date of transaction: ".date('l jS \of F Y h:i:s A',  $timestamp); // m/d/Y
  



   // echo "<DIV >";
 // echo "<DIV style='display:inline-block;height:450px;width:400px;background-color:blue;color:white;'>";
    
 



  $transactioncount = $transactioncount + 1;
 
  //echo "transaction #".$transactioncount.": ".$txn['txid']."<BR>";
  
  
  
  $leftsidedata = array();
  $rightsidedata = array();


  $leftsidedataADDRESS = array();
  $rightsidedataADDRESS = array();


  $thirdsideleftdata = array();
  $thirdsiderightdata = array();
  $leftsideALLdata = array();
  $rightsideALLdata = array();
  
//  echo "<BR>--------------------";
  
  
  
  if($txn && isset($txn['vin']) && $txn['vin'])
  {
    $incomingthings=$txn['vin'];
  
    $totalleftside = sizeof($incomingthings);
  
    if ($totalleftside > 5) {
  

        
 array_push($leftsidedata, "many addresses (".$totalleftside.") including:");
   //   echo "many entries (".$totalleftside."), will only show 5...<BR>";
    }
   $bonushtmlleftside = "";
  $totalshownleftside = 0;
  
    foreach($incomingthings as $incomingthing) {
  
  
      if($incomingthing && isset($incomingthing['prevout']) && $incomingthing['prevout'])
      {
        $prevoutness=$incomingthing['prevout'];
      
   $ouraddress = $prevoutness['scriptpubkey_address'];
  
  
  $theamount = $prevoutness['value'];
  
  $totalshownleftside = $totalshownleftside + 1;
     $satoshii=100000000;
     $realamount = $theamount / $satoshii;
  
     if ($ouraddress === $wallet) {
  
      $totalgained = $totalgained + $realamount;
  $amountaffected = $amountaffected + $realamount;
  
  if ($direction === 0) {
    $direction = 1;
  }
  if ($direction === 2) {
  
    $direction = 3;
  }
  
    //  echo "<DIV style='color:red'>";
      $bonushtmlleftside = $bonushtmlleftside."<DIV style='color:red'>";
    }
    
    if ($totalshownleftside < 5 || $ouraddress === $wallet) {


        $realamountB = number_format($realamount, 8);
        $realamountC = rtrim($realamountB, '0');
        $realamountD = rtrim($realamountC, '.');

$correctlink = "?cryptowallet=".$ouraddress;

 array_push($leftsidedata, "<a href='".$correctlink."'>".$ouraddress."</a> for ".$realamountD." btc");
  
 array_push($leftsidedataADDRESS,$ouraddress);
      //  echo "the address is: ".$ouraddress." for ".$realamount." BTC";
       // echo "<BR>";
        $bonushtmlleftside = $bonushtmlleftside."the address is: ".$ouraddress." for ".$realamount." BTC<BR>";

        
      } 
      if ($totalshownleftside < 5) {


if ($ouraddress !== $wallet) {


        $moredataleft = checkWallet($ouraddress, $pdo);

        if ($moredataleft !== "") {
        


         array_push($thirdsideleftdata, $moredataleft);
          
        }
  

      }




      } else {

if ($ouraddress === $wallet) {

} else {

  array_push($leftsideALLdata,"".$ouraddress." for ".$realamount." btc");
  array_push($leftsidedataADDRESS,$ouraddress);
    }


        $bonushtmlleftside = $bonushtmlleftside."the address is: ".$ouraddress." for ".$realamount." BTC<BR>";
      }
  
  
        if ($ouraddress === $wallet) {
  
          $bonushtmlleftside = $bonushtmlleftside."</DIV>";
      //    echo "</DIV>";
        }
  
       
      }

    }
  
  
  
  
  
  
  
    if ($totalshownleftside < 5) {
  
  
    } else {
    
      $bonushtmlleftside = '"'.$bonushtmlleftside.'"';

      $terms = '"DISPLAYALLA'.$transactioncount.'"';
    //  $additionalFinalInfoLeftSide = "<INPUT TYPE='hidden' name='LEFTSIDEINFO".$transactioncount."'  id='LEFTSIDEINFO".$transactioncount."' value=$bonushtmlleftside><INPUT TYPE='button' name='DISPLAYALLA".$transactioncount."' id='DISPLAYALLA".$transactioncount."' onclick='writeLEFTSIDEiNFO".$transactioncount."()' value='display all'>";
      $additionalFinalInfoLeftSide = "<INPUT TYPE='hidden' name='LEFTSIDEINFO".$transactioncount."'  id='LEFTSIDEINFO".$transactioncount."' value=$bonushtmlleftside><INPUT TYPE='button' name='DISPLAYALLA".$transactioncount."' class='bugga' id='DISPLAYALLA".$transactioncount."' onclick='doleftsidestuff".$transactioncount."(".$terms.");' value='display all'>";
  //  echo "<BR>";
   //   echo ;
   //   echo ;
 // echo "<BR>";  

 echo "<script>";
 //echo 'document.querySelectorAll("#DISPLAYALLA'.$transactioncount.'").forEach(function(button) {
 
 echo '
 function doleftsidestuff'.$transactioncount.'(someterms) {';
 
echo '


  var moreWalletInfoJS'.$transactioncount.' = new Array();
  var mwi'.$transactioncount.' = 0;

  ';

$leftsideentriesinexcess = sizeof($leftsideALLdata);

for ($xx=0;$xx<$leftsideentriesinexcess;$xx++) {

    echo 'moreWalletInfoJS'.$transactioncount.'[mwi'.$transactioncount.'++] = "'.$leftsideALLdata[$xx].'";';

}

//echo 'mwi'.$transactioncount.'--;';

   echo  ' var ourbutton = document.getElementById(someterms);
     var index = Array.prototype.indexOf.call(ourbutton.parentNode.children, ourbutton);
 
         // create ten more rows and add them to the table
         for (var i = 0; i < mwi'.$transactioncount.'; i++) {
             var row = document.createElement("tr");
             var cell = document.createElement("td");
             cell.innerHTML = moreWalletInfoJS'.$transactioncount.'[i];
             row.appendChild(cell);
             ourbutton.parentNode.insertBefore(row, ourbutton.nextSibling);
         }
         ourbutton.style.visibility ="hidden";
 }
 ';
 
 echo "</script>";

  /*
        echo "<script>
    
  
  function writeLEFTSIDEiNFO".$transactioncount."() {
  
  var stufftowrite = document.getElementById('LEFTSIDEINFO".$transactioncount."').value;
  document.write(stufftowrite);
  
  }
  
        </script>";*/
      
  
    }
  
  
  
  
  }
  
  
  
 // echo "</DIV>";
  
  
  //echo "<DIV style='display:inline-block;height:450px;width:500px;background-color:navy;color:white;'>";
  
  //echo " goes to here<BR>";
  if($txn && isset($txn['vout']) && $txn['vout'])
  {
    $incomingthings=$txn['vout'];
   $totalentries = sizeof($incomingthings);
  
   if ($totalentries > 5) {
  
 // echo "<BR> there are a lot of addresses (".$totalentries.") so we'll show only first 5...<BR>";
 array_push($rightsidedata, "many addresses (".$totalentries.") including:");
   }
  
  $totalshown = 0;
  $bonushtml = "";
    foreach($incomingthings as $incomingthing) {
  
      
      $totalshown = $totalshown + 1;
  
  
  $theamount2 = $incomingthing['value'];
  
  
  $satoshiii=100000000;
  $realamount2 = $theamount2 / $satoshiii;
     //echo "the address is: ".$ouraddress." for ".$realamount." BTC";
     //echo "<BR>";
  
  
     if ($incomingthing['scriptpubkey_address'] === $wallet) {
  
     // echo "<DIV style='color:red'>";
      $totalsent = $totalsent + $realamount2;
  
      $bonushtml =$bonushtml."<DIV style='color:red'>";
      $amountaffected = $amountaffected - $realamount2;
  
      if ($direction === 0) {
        $direction = 2;
      }
      if ($direction === 1) {
      
        $direction = 3;
      }
  
    }
    
    if ($incomingthing['scriptpubkey_address'] === $wallet || $totalshown < 5) {
    //  echo "<BR>";


    $realamount2B = number_format($realamount2, 8);
    $realamount2C = rtrim($realamount2B, '0');
    $realamount2D = rtrim($realamount2C, '.');


    array_push($rightsidedataADDRESS,$incomingthing['scriptpubkey_address']);

    $linkdata = "<a href='?cryptowallet=".$incomingthing['scriptpubkey_address']."'>";
    $linkdata2 = "</a>";
 array_push($rightsidedata, $linkdata.$incomingthing['scriptpubkey_address'].$linkdata2." for ".$realamount2D." btc");
      $bonushtml =$bonushtml."<BR>the address going to is : ".$incomingthing['scriptpubkey_address']." for ".$realamount2." BTC<BR>";
  // echo "the address going to is : ".$incomingthing['scriptpubkey_address']." for ".$realamount2." BTC";
 //  echo "<BR>";
    } 
    
    if ($totalshown < 5)
    {

      if ($incomingthing['scriptpubkey_address'] !== $wallet) {

      $moredataright = checkWallet($incomingthing['scriptpubkey_address'], $pdo);

      if ($moredataright !== "") {
      
      array_push($thirdsiderightdata, $moredataright);
        
      }
    }
    
    } else {

        if ($incomingthing['scriptpubkey_address'] === $wallet) {

        } else {

      
    array_push($rightsidedataADDRESS,$incomingthing['scriptpubkey_address']);
        array_push($rightsideALLdata, "".$incomingthing['scriptpubkey_address']." for ".$realamount2." btc");
    }
      $bonushtml =$bonushtml."<BR>the address going to is : ".$incomingthing['scriptpubkey_address']." for ".$realamount2." BTC<BR>";
    }
  
  
      if ($incomingthing['scriptpubkey_address'] === $wallet) {
  
        $bonushtml =$bonushtml."</DIV>";
    //    echo "</DIV>";
      }
      
  
  /*
      if($incomingthing && isset($incomingthing['prevout']) && $incomingthing['prevout'])
      {
        $prevoutness=$incomingthing['prevout'];
      
   $ouraddress = $prevoutness['scriptpubkey_address'];
  
  $theamount = $prevoutness['value'];
  
  
     $satoshii=100000000;
     $realamount = $theamount / $satoshii;
        echo "the address is: ".$ouraddress." for ".$realamount." BTC";
        echo "<BR>";
  
      }
  //echo " <BR> ";
  //echo " Incoming address: ".$incomingthing['txid']."<BR>";
  */
  
  
  
    
  
  
  
  
  
  
  
  
  
  
    }
  
    if ($totalshown > 5) {
  
      $bonushtml = '"'.$bonushtml.'"';
  
   // echo "<BR>";
   $termz = '"DISPLAYALLB'.$transactioncount.'"';
  // $additionalFinalInfoRightSide = "<INPUT TYPE='hidden' name='INFO".$transactioncount."'  id='INFO".$transactioncount."' value=$bonushtml><INPUT TYPE='button' onclick='writeiNFO".$transactioncount."()' name='DISPLAYALLB".$transaction."' id='DISPLAYALLB".$transaction."' value='display all'>";
   $additionalFinalInfoRightSide = "<INPUT TYPE='hidden' name='INFO".$transactioncount."'  id='INFO".$transactioncount."' value=$bonushtml><INPUT TYPE='button' onclick='dorightsidestuff".$transactioncount."(".$termz.")' name='DISPLAYALLB".$transactioncount."' id='DISPLAYALLB".$transactioncount."' class='bugga' value='display all'>";
   //  echo "<BR>";  
  
    echo "<script>";
    

    echo '
    function dorightsidestuff'.$transactioncount.'(someterms) {';
    
   echo '
   
   
     var moreWalletInfoJSB'.$transactioncount.' = new Array();
     var mwiB'.$transactioncount.' = 0;
   
     ';
   // example big one 3D19vDUmUByqBXErUFvb3EJ9pFDF23kQQw
   $rightsideentriesinexcess = sizeof($rightsideALLdata);
   
   for ($xx=0;$xx<$rightsideentriesinexcess;$xx++) {
   
       echo 'moreWalletInfoJSB'.$transactioncount.'[mwiB'.$transactioncount.'++] = "'.$rightsideALLdata[$xx].'";';
   
   }
   
   //echo 'mwi'.$transactioncount.'--;';
   
      echo  ' var ourbutton = document.getElementById(someterms);
        var index = Array.prototype.indexOf.call(ourbutton.parentNode.children, ourbutton);
    
            // create ten more rows and add them to the table
            for (var i = 0; i < mwiB'.$transactioncount.'; i++) {
                var row = document.createElement("tr");
                var cell = document.createElement("td");
                cell.innerHTML = moreWalletInfoJSB'.$transactioncount.'[i];
                row.appendChild(cell);
                ourbutton.parentNode.insertBefore(row, ourbutton.nextSibling);
            }
            ourbutton.style.visibility ="hidden";
    }
    ';

    echo "</script>";
      
  
  
       }
    
  
  }
  
  
 // echo "<DIV style='display:inline-block;height:350px;width:200px;background-color:white;color:navy;'>";
    
 // echo " AMOUNT CHANGE ".$amountaffected."<BR>";
  
  $newdirection = "";
  
  if ($direction === 0) {
    $newdirection = "unknown";
  }
  if ($direction === 1) {
    $newdirection = "sent";
  }
  if ($direction === 2) {
    $newdirection = "gained";
  }
  if ($direction === 3) {
    $newdirection = "special";
  }
  
  //echo " DIRECTION WOULD BE ".$newdirection;
  
  //echo "</DIV>";
  
  
  //echo "</DIV>";
  
  
  
  
  
  
//  echo "</DIV>";


// &uarr; darr

// <Font face="wingdings">&#8657;</font>
// <Font face="wingdings">&#8657;</font>8659
// do stuff here to sort the data into rows 

//$uparrow = '<Font face="wingdings">&#8657;</font>';
//$downarrow = '<Font face="wingdings">&#8659;</font>';
$uparrow = '&uarr;';
$downarrow = '&darr;';

$colorofarrow = "white";
$charactertouse = "";


if ($newdirection === "sent") {
    $colorofarrow = "#a6ffb5"; // #e0ffea
    $charactertouse = $uparrow;

}
if ($newdirection === "gained") {

    $colorofarrow = "#ff906e";
    $charactertouse = $downarrow;

}

if ($newdirection === "special") {

    $colorofarrow = "yellow";
    $charactertouse = $downarrow.$uparrow;

}

$textcolor = "white";

$linktext1 = "<A HREF='crypto2.php?txid=".$lastknowntxid."'>";
$linktext2 = "</A>";

echo '<tr>';
echo '<td class="chugga" colspan="'.$columncount.'"><b>Transaction Hash @ </b>'.date('l jS \of F Y h:i:s A',  $timestamp);
echo '</td>';
echo '</tr>';

echo '<tr>';
echo '<td style="color:'.$specialcolor.';" colspan="'.$columncountminusone.'">'.$linktext1.$lastknowntxid.$linktext2;
echo '</td>';

echo '<td>';

//

$newthingthing = number_format($amountaffected, 8);
$trimmed = rtrim($newthingthing, '0');
$trimmed2 = rtrim($trimmed, '.');




echo $trimmed2." btc     <FONT style='color:".$colorofarrow.";font-size:30px'><b>".$charactertouse."</b></FONT>";

echo '</td>';
echo '</tr>';


$sizeofleftsidedata = sizeof($leftsidedata);
$sizeofrightsidedata = sizeof($rightsidedata);
$sizeofthirdsidedataL = sizeof($thirdsideleftdata);
$sizeofthirdsidedataR = sizeof($thirdsiderightdata);



$sizeofleftsidedataADDRESS = sizeof($leftsidedataADDRESS);
$sizeofrightsidedataADDRESS = sizeof($rightsidedataADDRESS);




$leftSideIsTheSameAddress = areAllElementsIdentical($leftsidedataADDRESS);





//echo "BEEPS".$leftsidedataADDRESS[0];

$ouraddressSpottedOnLeftSide = false;

$ouraddressSpottedOnRightSide = false;


for ($x=0;$x<$sizeofleftsidedataADDRESS;$x++) {

$currentaddress1 = $leftsidedataADDRESS[$x];

if ($currentaddress1 === $wallet) {

  $ouraddressSpottedOnLeftSide = true;

}

}


for ($x=0;$x<$sizeofrightsidedataADDRESS;$x++) {

  $currentaddress1 = $rightsidedataADDRESS[$x];
  
  if ($currentaddress1 === $wallet) {
  
    $ouraddressSpottedOnRightSide = true;
  
  }
  
  }
  
  

if ($ouraddressSpottedOnLeftSide) {

  if ($ouraddressSpottedOnRightSide) {


 //   array_push($thirdsiderightdata, "CHANGE ADDRESS");

  }
}
$newnotes ="";
$clusterlocated = false;



if ($sizeofrightsidedata === 2) {


$arrayintersect =array_intersect($leftsidedataADDRESS, $rightsidedataADDRESS);

$sizeofarrayintersect = sizeof($arrayintersect);

if ($sizeofarrayintersect === 1) {


$newnotes = "change address"; 
if ($ouraddressSpottedOnLeftSide === true) {



  if ($ouraddressSpottedOnRightSide === true) {


if ($sizeofleftsidedata === 1 && $ouraddressSpottedOnLeftSide === true && $ouraddressSpottedOnRightSide === true) {



  $newnotes = $newnotes.', searched address becomes change address';

} else {


  if ($leftSideIsTheSameAddress === 1) {
 
    $newnotes = $newnotes.', left side all one address';
  

  } else {
    $clusterlocated = true;

    $newnotes = $newnotes.', searched address becomes change address, found a cluster related to the searched address';
  

  }


}












  } else {


    $newnotes = $newnotes.', searched address depletes';
  

    $clusterlocated = true;

  }




} else {

  if ($ouraddressSpottedOnRightSide === true) {

    if ($sizeofleftsidedata > 1) {


  $newnotes = $newnotes.', searched address is recipient, unrelated clustering event';



   // could deal with unrelated clustering event here
    } else {

      $newnotes = $newnotes.', searched address is recipient, no clustering';

    }

 // $clusterlocated = true;

} else {

  $newnotes = $newnotes.', searched address absent';
  

}



}



} 
if ($sizeofarrayintersect === 2) {

  $newnotes = $newnotes.', double intersect';
  


}


if ($sizeofarrayintersect === 0) {

  $newnotes = $newnotes.'no intersection';
  


}



} else {
  $newnotes = $newnotes.', right side'.$sizeofrightsidedata;
  
  if ($sizeofrightsidedata === 1) {



if ($sizeofleftsidedata > 1) {

if ($ouraddressSpottedOnLeftSide) {


if ($leftSideIsTheSameAddress === 1) {


  $newnotes = $newnotes.'left side all the same'; // canvas

} else {

  
  $clusterlocated = true;
  $newnotes = $newnotes.'cluster opportunity for the searched wallet'; // canvas


}





} else {

  $newnotes = $newnotes.'cluster opportunity not for the searched wallet'; // canvas



}

}







  }

  
}









array_push($thirdsiderightdata, $newnotes);


$sizeofleftsidedata = sizeof($leftsidedata);
$sizeofrightsidedata = sizeof($rightsidedata);
$sizeofthirdsidedataL = sizeof($thirdsideleftdata);
$sizeofthirdsidedataR = sizeof($thirdsiderightdata);
$dator = "";

if (isset($_POST["CANCLUSTER"])) {
if ($clusterlocated === true) {

/*

  $dator = updateSearchedAddresses($wallet, $pdo);

  if ($dator === "NONEED") {

    
  }
  if ($dator === "NEED") {
    updateAddressAsSearched($wallet, $pdo);

    
  }
  if ($dator === "NEEDADD") {


    addAddressAsSearched($wallet, $pdo);


    
  }
  */

  $clustermembers = array_merge($clustermembers, $leftsidedataADDRESS);





// members of the cluster are 
// leftsidedataADDRESS
}
}

$thebiggerofthetwo = 0;
$thebiggerofthethree = 0;

if ($sizeofleftsidedata > $sizeofrightsidedata) {
  $thebiggerofthetwo = $sizeofleftsidedata;
} else {


  $thebiggerofthetwo = $sizeofrightsidedata;
}

if ($thebiggerofthetwo > $sizeofthirdsidedataR) {
  $thebiggerofthethree = $thebiggerofthetwo;
} else {


  $thebiggerofthethree = $sizeofthirdsidedataR;
}

if ($thebiggerofthethree > $thebiggerofthetwo) {
  $thebiggerofthetwo = $thebiggerofthethree;
}


echo "  <tr>";
    echo " <td class='chugga' >Incoming Funds</td>";
    echo " <td class='chugga' >Outgoing Funds</td>";
    echo " <td class='chugga' >Notes/Flags".$dator."</td>";
 
    echo "  </tr>";


for ($x=0;$x<$thebiggerofthetwo;$x++) { // this is how many rows we are going to do

    $textcolor1 = "white";
    $textcolor2 = "white";
    $textcolor3 = "white";

    $firstcolumndata = "";
    $secondcolumndata = "";
    $thirdcolumndata = "";


    if ($x < $sizeofleftsidedata) {
    $firstcolumndata=$leftsidedata[$x];
    }
    if ($x < $sizeofrightsidedata) {
    $secondcolumndata=$rightsidedata[$x];
    }

    if ($x < $sizeofthirdsidedataL) {
      $thirdcolumndata=$thirdsideleftdata[$x];
      }

      if ($x < $sizeofthirdsidedataR) {
        $thirdcolumndata=$thirdcolumndata.$thirdsiderightdata[$x];
        }
  

    if (str_contains($firstcolumndata, $wallet)) {

        $textcolor1 = $specialcolor;
    }
    
    
if (str_contains($secondcolumndata, $wallet)) {

    $textcolor2 = $specialcolor;
}

    

echo "  <tr>";
    echo " <td style='color:".$textcolor1.";'>".$firstcolumndata."</td>";
    echo " <td style='color:".$textcolor2.";'>".$secondcolumndata."</td>";
    echo " <td style='color:".$textcolor3.";'>".$thirdcolumndata."</td>";
 
    echo "  </tr>";

  
  
}



echo "  <tr>";
echo " <td>".$additionalFinalInfoLeftSide."</td>";
echo " <td>".$additionalFinalInfoRightSide."</td>";
echo " <td></td>";

echo "  </tr>";




  
  }




  if ($chainstats['tx_count'] > 25) {
  
echo "  <tr>";
echo " <td>There are more than 25 transactions</td>";
echo " <td>Would you like to view more?</td>";
echo " <td></td>";

echo "  </tr>";



  }
  
  if (isset($_POST["CANCLUSTER"])) {
  
$unknownmembers = array();

$clustermembers = array_unique($clustermembers);
$clustermembers = array_values($clustermembers);

$clustersize = sizeof($clustermembers);


$doWeRequireANewCluster = false;
$anyKnownWallets = false;

$anyUnknownWallets = false;

$whichcluster = -1;
  if ($clustersize > 0) {
  
    echo "  <tr>";
    echo " <td></td>";
    echo " <td>Cluster members discovered:</td>";
    echo " <td></td>";
    
    echo "  </tr>";


for ($x=0;$x<$clustersize;$x++) {



  $resultsOfNewQuery = getClusterKeyAndSearchednessFromWallet($clustermembers[$x], $pdo);

  $keysss = $resultsOfNewQuery[0];
  $searccch = $resultsOfNewQuery[1];
  $knownstatus = $resultsOfNewQuery[2];

  echo "  <tr>";
  echo " <td>CHUGGA ".$keysss."</td>";
  echo " <td>".$searccch."</td>";
  echo " <td>".$knownstatus."</td>";
  
  echo "  </tr>";
  


$resultsofnewfucntin = checkIfAddressIsInKnownClusters($clustermembers[$x], $pdo);
$report = "";


if ($resultsofnewfucntin === false) {
  //if ($knownstatus === 0) {

      $anyUnknownWallets = true;
    // address is not known
    array_push($unknownmembers, $clustermembers[$x]);
    $report = "address is unknown";
   
    

  } else {
  $anyKnownWallets = true;
// address is known
$report = "address is in a known cluster";


$whichcluster = getClusterFromAddress($clustermembers[$x], $pdo);


//$report = $report.". namely, cluster ".$keysss." ";
$report = $report.". namely, cluster ".$whichcluster." ";


$newreporto = checkIfAddressSearchedWallets($clustermembers[$x], $pdo);

$newreporto2 = "";






if ($newreporto === -1) {

  $newreport2 = "error";
}
if ($newreporto === 0) {

  $newreport2 = " and has been searched";
}
if ($newreporto === 1) {

  $newreport2 = " and is unsearched";
}

$report = $report.$newreport2;
} 



    echo "  <tr>";
    echo " <td></td>";
    echo " <td>".$clustermembers[$x]."</td>";
    echo " <td>".$report."</td>";
    
    echo "  </tr>";
    
  }
    



$howmanyunknown = sizeof($unknownmembers);

if ($howmanyunknown === 0) {




} else {




  echo "  <tr>";
echo " <td></td>";
echo " <td></td>";
echo " <td>We looked up this wallet: ".$wallet." </td>";

echo "  </tr>";


if (isset($_POST["CANCLUSTER"])) {
foreach ($unknownmembers as $unknownmember) {

//addWalletToCluster($unknownmember, $whichcluster, $pdo);  // what is going on here?
//addWalletToSearchedWallets2($unknownmember, $pdo, 0);

addWalletToEverything($unknownmember, $whichcluster, $pdo);

echo "  <tr>";
echo " <td></td>";
echo " <td>Added ".$unknownmember." to ".$whichcluster." the cluster</td>";
echo " <td></td>";

echo "  </tr>";

}
}

if (isset($_POST["CANCLUSTER"])) { 

} else {


  echo "  <tr>";
  echo " <td></td>";
  echo " <td>We could add additions to clusters</td>";
  echo " <td></td>";
  
  echo "  </tr>";
  


}






}

  }




if ($anyKnownWallets === false) {



  if (isset($_POST["CANCLUSTER"])) {
$doWeRequireANewCluster = true;


$newclusterkey = makeNewCluster($pdo); // add new cluster addnewcluster


if ($newclusterkey === -1){

} else {

  
for ($x=0;$x<$clustersize;$x++) {

  addWalletToCluster($clustermembers[$x], $newclusterkey, $pdo);  // what is going on here?
  
  if ($clustermembers[$x] === $wallet) {

    
addWalletToSearchedWallets($clustermembers[$x], $pdo, 1);
  } else {


    addWalletToSearchedWallets($clustermembers[$x], $pdo, 0);

  }
  }
  

echo "  <tr>";
echo " <td></td>";
echo " <td>We built a new cluster</td>";
echo " <td> with key ".$newclusterkey."</td>";

echo "  </tr>";

//updateWalletAsSearched($wallet, $pdo);

// add the wallets to the cluster based on the key
}

} else {


  echo "  <tr>";
  echo " <td></td>";
  echo " <td><FORM method='post' action='' name='ourform".$transactioncount."' id='ourform".$transactioncount."'><INPUT value='1' name='CANCLUSTER' type='hidden'><INPUT value='cluster' type='submit'> </FORM></td>";
  echo " <td></td>";
  
  echo "  </tr>";



}
}



}else {


  echo "  <tr>";
  echo " <td></td>";
  echo " <td><FORM method='post' action='' name='ourzform".$transactioncount."' id='ourzform".$transactioncount."'>
  
  
  <INPUT value='1' name='CANCLUSTER' type='hidden'><INPUT value='run again but allow clustering' type='submit'>";
  echo '<input type="hidden" name="cryptowallet" value="'. $wallet . '">';
  echo '<input type="hidden" name="postoffset" value="1">';
  echo '<input type="hidden" name="lasthash" value="">';
  echo '<input type="hidden" name="lastpage" value="1">';
  echo '<input type="hidden" name="usehash" value="0">';
  echo "</FORM></td>";
  echo " <td></td>";
  
  echo "  </tr>";



}//CREATE UNIQUE INDEX my_index ON my_table (column1);




if (isset($_POST['CANCLUSTER'])) {
$sql = "INSERT INTO `address_helped_cluster` (`address`, `searched`)
VALUES ('".$wallet."', 1)
ON DUPLICATE KEY UPDATE `searched` = 1;";
  $stmt = $pdo->prepare($sql);
  //$stmt->bindValue(':address', $wallet);
 // $stmt->bindValue(':searched', 1);
  $stmt->execute();
  
/*

we have looked up a wallet 

i want to set the value of a column to 1 in a table and if the entry doesn't exist, create it for wallet and set it to 1



$dator = updateSearchedAddresses($wallet, $pdo);

if ($dator === "NONEED") {

  
}
if ($dator === "NEED") {
  updateAddressAsSearched($wallet, $pdo);

  
}
if ($dator === "NEEDADD") {


  addAddressAsSearched($wallet, $pdo);


  
}
*/
}

  for ($v=0;$v<25;$v++) {

    echo "  <tr>";
    echo " <td style='background-color:black;color:white;font-size:22px;' colspan=".$columncount."></td>";
    echo "</tr>";
    
    


  }


  echo '             </tbody>';
  echo '         </table>';
  echo '         </div>';

  
  echo "<FORM method='post' action=''";
  echo "<BR> <INPUT type='hidden' value='".$wallet."' id='postwallet' name='postwallet'>";
  echo "<BR> <INPUT type='hidden' value='".$wallet."' id='cryptowallet2' name='cryptowallet'>";
  echo "<BR> <INPUT type='hidden' value='1' id='givemore' name='givemore'>";


  $knownpage = 1;

  if (isset($_POST['page'])) {

    $knownpage = $_POST['page'];



    if (isset($_POST['lastpage'])) {

        $knownpage = $_POST['lastpage'];

    }






if ($reject === false) {
$knownpage = $knownpage + 1;
}
  }
  
  echo "<BR> <INPUT type='hidden' value='".$knownpage."' id='page' name='page'>";

  echo "<BR> <INPUT type='hidden' value='".$lastknowntxid."' id='lasthash' name='lasthash'>";
  //echo "lastknown hash: ".$lastknowntxid;
  //echo "<BR>showing transactions from the beginning plus this page offset: <INPUT type='text' value='".$offset."' id='postoffset' name='postoffset'>"; // 34xp4vRoCGJym3xR7yCVPFHoCNxv4Twseo
  
  if ($chainstats['tx_count'] > 25) {

    
  $totalpages = $chainstats['tx_count'] / 25;
  $totalpages = round($totalpages, 0);

  if ($knownpage === $totalpages) {

  } else {
    
  
  echo "<BR><INPUT type='submit' value='load another 25' name='moretxsubmit' id='moretxsubmit'>";
  
}
  
  
  
  }
  echo "</FORM>";



  // this section successfully gets some transaction info
  
  $offbyX = $totalgained - 150.07599040;
  $offbyY = $totalsent - 150.07650586;
  
 // echo "<BR>";
 // echo "<BR>";
 // echo "<BR>";
 // echo "<BR>TOTAL GAINED:".$totalgained;
  //echo "<BR>TOTAL SENT:".$totalsent;
  
  
  
  $currentbalance = $totalsent - $totalgained;
  
  //echo "<BR> BALANCE: ".$currentbalance."(SHOULD BE 0.00051546)";
  
  
  return true;
  } // end of function
  
  







ob_start();




if (isset($_POST["givemore"]) && $_POST["givemore"]) {
    $givemore = $_POST['givemore'];
    
    }
    
 
if (isset($_POST["usehash"]) && $_POST["usehash"]) {
    $givemore = $_POST['usehash'];
    
    }







include __DIR__ . '/templates/layout.html.php';



/*

if (isset($_POST['cryptowallet'])) {

 
    echo "<script>";
    echo "
    
    document.getElementById('lastwallet').value = '".$_POST['cryptowallet']."';
    
    
    ";
    
    echo "</script>";
}

*/


function checkWallet($walletgiven, $pdo) {
$thingtoreturn = "";

/*
if ($walletgiven === "34xp4vRoCGJym3xR7yCVPFHoCNxv4Twseo") {

  $thingtoreturn = "THIS IS BINANCE<BR>";
}*/




$sql2 = 'SELECT `id`,`wallet`,`note` FROM `new_walletnotes` WHERE `wallet` LIKE "%'.$walletgiven.'%"';

//$sql = 'SELECT `wallet`,`note` FROM `new_walletnotes` WHERE `wallet`="' . $walletgiven. '"';





$result = $pdo->query($sql2);
//$result = $pdo->query($sql2);




$count = 0;
foreach ($result as $entry) {
$count = $count + 1;

    if ($entry['wallet']) {

       // echo "wallet: ".$entry['wallet'];
      //  $appends = $appends."wallet: ".$entry['wallet'];
        }
    //    $appends = $appends."<BR>";
     //   echo "<BR>";
        if ($entry['note']) {

          //  echo "note: ".$entry['note'];
            $appends = $appends."".$entry['note'];
            }
            $appends = $appends."<BR><BR>";                    

//echo "<BR>-----------------------<BR><BR><BR>";

}



return $appends;
}



             

$lastoffset = 1;

if (isset($_POST["postoffset"]) && $_POST["postoffset"]) {
$lastoffset = $_POST['postoffset'];

}

if (isset($_POST["cryptowallet"])) {

  if (isset($_POST["lasthash"]) && $_POST["lasthash"]) {
 
/*
    if (isset($_POST['lastpage'])) {

        echo "<p>last PAGE:".$_POST['lastpage']."</P>";
    
    
      }

      if (isset($_POST['givemore'])) {

        echo "<p>givemore:".$_POST['givemore']."</P>";
    
    
      }
*/
if (isset($_POST["givemore"]) && $_POST["givemore"]) {
 
  $nextpage = 1;

  $wallet = $_POST["cryptowallet"];
  
  if (isset($_POST['page'])) {

  //  echo "<p>PAGE:".$_POST['page']."</P>";


  }

 

  
require_once '../keys/storage.php';



$sql5 = 'SELECT `lastrequest` FROM `last_timestamp`';

// $sql2 = 'SELECT `concept` FROM `concepts`';



$result = $pdo->query($sql5);
//$result = $pdo->query($sql2);
$lasttimestamp = "";
$totalrows = $totalrows;

foreach ($result as $row) {
  $lasttimestamp = $row['lastrequest'];
}

if ($lasttimestamp !== "") {

//echo "FOUND TIME STAMP";

$newstamps = $_SERVER['REQUEST_TIME'];


$stampDIFFFF = $newstamps - $lasttimestamp;

//echo "<BR> it been".$stampDIFFFF." seconds.";
$madedump = false;
if ($stampDIFFFF > 20) {

 // echo " <BR>  you got approve";

$sql = 'UPDATE `last_timestamp` SET `lastrequest`="'.$newstamps.'" WHERE `id` LIKE "%1%"';//1670475715


$affectedRows = $pdo->exec($sql);

$madedump = true;

//echo "<p>BE DUMPED</p>";


$dumped = dumpeverything($wallet, $lastoffset, $_POST["lasthash"], 1, $pdo);
} else {

  echo "<BR> <p>you got reject</p>";
$reject = true;


}



//echo "<BR> we executed code to affect something to ".$affectedRows;


//echo " WAAA";

} else {

  // only really happens once

  $stmt5 = $conn->prepare("INSERT INTO last_timestamp (lastrequest) VALUES (?)");
    $newstamps = $_SERVER['REQUEST_TIME'];
 $stmt5->bind_param("s",$newstamps);
 $stmt5->execute(); 
  // $stmt->bind_param("s",$concepttext);
   // $stmt->execute(); 

   echo "<BR> <p>you got dumped</p>";



   $dumped = dumpeverything($wallet, $lastoffset, $_POST["lasthash"], 2, $pdo);
//echo " <BR> ".$newstamps;

  //echo " QUERIED BUT NO STIME TSMPA so we add entry";
}


  
  } else {

  }

}else {

}

}
if (isset($_POST["cryptowallet"]) || isset($_GET['cryptowallet'])) {

  $wallet = "";

if (isset($_POST["cryptowallet"])) {
    $wallet = $_POST["cryptowallet"];
  }


    if (isset($_GET['cryptowallet'])) {
      $wallet = $_GET['cryptowallet'];
  
  }


    if ($wallet === "") {
    
        
    } else {



/*

      $txnlist=file_get_contents("https://mempool.space/api/address/".$wallet."/txs");


      if($txnlist)
      {
      //  $txnlist=json_decode($txnlist,true);

print_r($txnlist);
      }
*/

/*
        $address = $wallet;

        $transaction_list=array();
        $satoshi=100000000;
        $txnlist=file_get_contents("https://blockchain.info/rawaddr/".$address);
        if($txnlist)
        {
          $txnlist=json_decode($txnlist,true);
          if($txnlist && isset($txnlist['txs']) && $txnlist['txs'])
          {
            $txns=$txnlist['txs'];
            foreach($txns as $txn)
             {
               $amount=$txn['result']/$satoshi;
               $time=$txn['time'];
               $hash=$txn['hash'];
               $transaction_list[]=array(
                 'amount'=>$amount,
                 'hash'=>$hash,
                 'time'=>$time
               );
             }
            }
         $data['address']=$txnlist['address'];
         $data['total_txn']=$txnlist['n_tx'];
         $data['total_received']=$txnlist['total_received']/$satoshi;
         $data['total_sent']=$txnlist['total_sent']/$satoshi;
         $data['final_balance']=$txnlist['final_balance']/$satoshi;
         $data['transaction_list']=$transaction_list;
        }
        print '<pre>';
        print_r($data);
        die();*/


// https://pro-api.coinmarketcap.com
/*
$parameters = [
  'start' => '1',
  'limit' => '5000',
 // 'convert' => 'USD'
];
*/


require_once '../keys/storage.php';



$sql5 = 'SELECT `lastrequest` FROM `last_timestamp`';

// $sql2 = 'SELECT `concept` FROM `concepts`';



$result = $pdo->query($sql5);
//$result = $pdo->query($sql2);
$lasttimestamp = "";
$totalrows = $totalrows;

foreach ($result as $row) {
  $lasttimestamp = $row['lastrequest'];
}

if ($lasttimestamp !== "") {

//echo "FOUND TIME STAMP";

$newstamps = $_SERVER['REQUEST_TIME'];


$stampDIFFFF = $newstamps - $lasttimestamp;

$importantnumber = 20 - $stampDIFFFF;


if ($stampDIFFFF > 20) {

 // echo " <BR>  you got approve";

$sql = 'UPDATE `last_timestamp` SET `lastrequest`="'.$newstamps.'" WHERE `id` LIKE "%1%"';//1670475715


$affectedRows = $pdo->exec($sql);

//echo "<p> you got NORMAL</p>";


$lasthasher = "";
$usehasher = 0;
if (isset($_POST['usehash'])) {
if (isset($_POST['lasthash'])) {
    $lasthasher = $_POST['lasthash'];

}
}



$dumped = dumpeverything($wallet, $lastoffset, $lasthasher, 1, $pdo);
} else {
  
    if ($dumped === true) {


      //  echo "<p> it was  dump</p>";
    } 

    if ($dumped === false) {

    echo "<p> wait ".$importantnumber." seconds.</p>";

  echo "<p> you got reject</p>";

if (isset($_POST['CANCLUSTER'])) {

$cancluster = true;

}

}
/*
if (isset($_POST['usehash']) && $_POST['usehash']) {

    echo "<p>usehash request".$_POST['usehash']."</p>";
      }
  if (isset($_POST['lasthash']) && $_POST['lasthash']) {

    echo "<p>page request".$_POST['lasthash']."</p>";
      }
  
      if (isset($_POST['givemore']) && $_POST['givemore']) {

        echo "<p>page givemore".$_POST['givemore']."</p>";
          }
*/
          if ($dumped === false) {

$exampleaddress = $wallet;

if (isset($_GET['cryptowallet'])) {

  $exampleaddress = $_GET['cryptowallet'];


}



        include  __DIR__ . '/templates/bitcoin2.html.php';
    }

/*
  if (isset($_POST['lastpage'])) {

    echo "<p>last page = ".$_POST['lastpage']."</p>";
      }


      if (isset($_POST['lastpage'])) {

        echo "<p>last page</p>".$_POST['lastpage'];
          }
    */

        $includedthething = true;
  
      

    $reject = true;
}



//echo "<BR> we executed code to affect something to ".$affectedRows;


//echo " WAAA";

} else {

  // only really happens once

  $stmt5 = $conn->prepare("INSERT INTO last_timestamp (lastrequest) VALUES (?)");
    $newstamps = $_SERVER['REQUEST_TIME'];
 $stmt5->bind_param("s",$newstamps);
 $stmt5->execute(); 
  // $stmt->bind_param("s",$concepttext);
   // $stmt->execute(); 

//echo " <BR> ".$newstamps;

  //echo " QUERIED BUT NO STIME TSMPA so we add entry";
}









/*
require_once '../keys/storage.php';
//echo $concepttext;
//console.log("test");
     // $stmt = $conn->prepare("INSERT INTO concepts (concept) VALUES (?)");
    
    // $stmt->bind_param("s",$concepttext);
     // $stmt->execute(); 


        $sql = 'INSERT INTO `concepts` SET `concept` = :concepttext';
    // $sql = 'INSERT INTO concepts (concept) VALUES (?)';

  $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':concepttext', $concepttext);
    $stmt->execute();
*/


//



/*
if($txinfo2 && isset($txinfo2['txid']) && $txinfo2['txid'])
{
  $txns=$txinfo2['txid'];
  foreach($txns as $txn)// we are looking at the array of all of the addresses on the left side of mempool
   {

  //  $prevout = $txn['prev_out'];



   // print_r($prevout);

   // echo "<BR>asdad+++++++++++++";
    
  //  $addrr = $prevout['addr'];

   // $values = $prevout['value'];
  //  $satoshis=100000000;
    print_r("ADDRESS: ".$txn);
    echo "<BR>";




echo "<BR>";
echo "----------------------------------";

echo "<BR>";

   }
  }*/
//$coindata = $decode->data;
/*

        $curl_response = curl_exec($txnlist);

        function escapeJsonString($value) { 
            $escapers = array("\'");
            $replacements = array("\\/");
            $result = str_replace($escapers, $replacements, $value);
            return $result;
        }
        
        
        
        $curl_response = escapeJsonString($curl_response);
        
        $curl_response = json_decode($curl_response,true);
        
        echo '<pre>';print_r($curl_response);
        
        echo $error = json_last_error();*/

$amountReceived  = "150BTC";
$amountReceived = $totalgained;
$amountSent = "150BTC";
$amountSent = $totalsent;


if (isset($_POST['lasthash'])) {
//echo "<p>updated last hash</p>";

if ($_POST['lasthash'] === "") {
    //echo "<p>empty</p>";

} else {

echo "<script>";
echo "

document.getElementById('lasthashhidden').value = '".$_POST['lasthash']."';


";

echo "</script>";

}

    }




if (isset($_SESSION["useruid"])) {

  if ($_SESSION["permissions"] === "SPECIAL") {

  //  include  __DIR__ . '/templates/bitcoindata2.html.php';

  }
}









    }




}

if (isset($_SESSION["useruid"])) {

  if ($_SESSION["permissions"] === "SPECIAL") {

    echo "<BR><BR>";
    echo "<BR><BR>";
    echo "<BR><BR>";



if (isset($_POST["cryptowallet"])) {




} else {


  if (isset($_GET["cryptowallet"])) {




  } else {
  



    include  __DIR__ . '/templates/bitcoin2.html.php';

    $includedthething = true;

  }


}


  }
}


if (isset($_POST['postwallet'])) {

  echo "<SCRIPT language='javascript'>
  

  document.getElementById('cryptowallet').value = '".$_POST['postwallet']."';
  
  
  </SCRIPT>";

}




//$maxheight = "height: 100%;";

$maxheight = "";
if (isset($_POST["cryptowallet"])) {


$maxheight = "";

}

?>