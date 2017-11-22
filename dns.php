<?php

Function dns($domain){
	echo $domain;
	echo "\n";
	$rs=dns_get_record(strtolower($domain),DNS_NS);
	print_r($rs);
	echo "\n";
}

dns("us1.vpnbook.com");
dns("us2.vpnbook.com");
dns("ca1.vpnbook.com");
dns("euro217.vpnbook.com");
dns("euro214.vpnbook.com");
dns("de233.vpnbook.com");

?>
