<?php

include('trait.php');

class phone_no{
    use CheckValidPhoneNumber;
}

$number = new phone_no();
$number->phone_number();