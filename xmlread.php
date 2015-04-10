<?php

$clients = simplexml_load_file('clients.xml');


if (is_object($client) ){
			print " \$client is an object <br>";
		}

foreach($clients->client as $client){
	echo $client['name']." ".$client['account_number'];

	print "$client->name has account number $client->account_number <br/>";
		}
