<?php

function countDigits($MyNum){
  $MyNum = (int)$MyNum;
  $count = 0;

  while($MyNum != 0){
    $MyNum = (int)($MyNum / 10);
    $count++;
  }
  return $count; 
}


$phno = $_POST["phone"];

$countphno = countDigits($phno);

$firstfourno = substr($phno,0,4);

$telenor = array("0974", "0975", "0976", "0977", "0978","0979");

$ooredoo = array("0994", "0995", "0996", "0997", "0998", "0999");

$mytel = array("0965", "0966", "0967", "0968", "0969");

$mpt7 = array("0951","0986","0920", "0922");

$mpt8 = array("0973", "0943", "0947", "0949");

$mpt9 = array("0940","0941","0942", "0944", "0945", "0925", "0926", "0988", "0989");

foreach($telenor as $atom){
  if($atom == $firstfourno && $countphno == 10){
    echo "Your Phone number is Telenor.";
  }
}

foreach($ooredoo as $ooredo){
  if($ooredo == $firstfourno && $countphno == 10){
    echo "Your Phone number is Ooredoo.";
  }
}

foreach($mytel as $myt){
  if($myt == $firstfourno && $countphno == 10){
    echo "Your Phone number is Mytel.";
  }
}


foreach($mpt7 as $mpt){
  if($mpt == $firstfourno && $countphno == 8){
    echo "Your Phone number is MPT.";
  }
}

foreach($mpt8 as $mpt){
  if($mpt == $firstfourno && $countphno == 9){
    echo "Your Phone number is MPT.";
  }
}

foreach($mpt9 as $mpt){
  if($mpt == $firstfourno && $countphno == 10){
    echo "Your Phone number is MPT.";
  }
}





