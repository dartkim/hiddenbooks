<?
$request = 'http://apis.daum.net/search/blog?apikey=06a7cab23104aa54f1b14d2e2a1cd2a51fafd1af&q='.urlencode('다음');
$phpobject = simplexml_load_string($response);
print_r($phpobject);
?>