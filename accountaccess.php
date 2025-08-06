<?php
require "saving_account_example_datetme.php";

$account = new Savingaccount();
$account->deposit(5000);
$account->setInterest(0.5);
$account->addinterest();

echo "account balence with Interest is ".$account->getbalence();

$account->addcharge();





?>