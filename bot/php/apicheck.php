<?

$conn = mysql_connect("localhost", "root", "newpassword");

if(!$conn){
	die('couldn\'t connect '.mysql_error());
}

mysql_query("use hiddenbooks");	
$res = mysql_query("select * from book_log");

echo "<pre>";
while( ($row = mysql_fetch_array($res)) ){
	print_r($row);
}
echo "</pre>";


mysql_close($conn);
/*
$request = 'http://apis.daum.net/search/book?sort=popular&result=10&output=json&apikey=06a7cab23104aa54f1b14d2e2a1cd2a51fafd1af&q='.urlencode($_GET['q']);
echo file_get_contents($request);
*/
/*
function searchBook($title) {
	$request = 'http://apis.daum.net/search/book?sort=popular&output=json&apikey=06a7cab23104aa54f1b14d2e2a1cd2a51fafd1af&q='.urlencode($title);
	$response = file_get_contents($request);
	$json_obj = json_decode($response);
	$items = $json_obj->channel->item;
	
	$book = $items[0];
	$msg = "님, 요책 어떠신가요? ".$book->title;
	return $msg;
}

echo searchBook($_GET['q']);
*/

//echo file_get_contents("http://book.daum-img.net/R72x100/BOK00020042466BA?moddttm=20130531162755");
?>