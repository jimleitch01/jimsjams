<?php

require_once 'vendor/autoload.php';

use MaxMind\Db\Reader;

$ipAddress = '195.66.90.65';

$databaseFile = 'GeoLite2-City.mmdb';


$reader = new Reader($databaseFile);

print_r($reader->get($ipAddress));

$geoinfo=($reader->get($ipAddress));

print "IP: $ipAddress\n";
print "CITY:" .$geoinfo[city] [names] [en]. "\n";
print "COUNTRY:" .$geoinfo[registered_country] [names] [en]. "\n";
print "LATITUDE:" .$geoinfo[location] [latitude]. "\n";
print "LONGITUDE:" .$geoinfo[location] [longitude]. "\n";





$handle = fopen("ips.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        //print "$line";
        $ipAddress=trim($line);

        $geoinfo=($reader->get($ipAddress));

        print "IP: $ipAddress,";
        print "CITY:" .$geoinfo[city] [names] [en]. ",";
        print "COUNTRY:" .$geoinfo[registered_country] [names] [en]. ",";
        print "LATITUDE:" .$geoinfo[location] [latitude]. ",";
        print "LONGITUDE:" .$geoinfo[location] [longitude]. "\n";



    }

    fclose($handle);
} else {
    // error opening the file.
}









// foreach($reader->get($ipAddress) as $x=>$x_value)
//   {
//   print "Key=" . $x . ", Value=" . $x_value . "\n";
//
//
//   print "Key=" . $x . ", Value=" . $x_value . "\n";
//
//   }




$reader->close()
?>
