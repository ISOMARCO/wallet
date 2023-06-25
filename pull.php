<?php 
include 'Projects/Frontend/Libraries/Demo.php';
#print_r(exec('git pull https://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@github.com/ISOMARCO/wallet.git'));
$demo = new Demo();
echo $demo->demo1();