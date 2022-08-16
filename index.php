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

$mpt = array("0951","0986","0920", "0922", "0973", "0943", "0947", "0949", "0940","0941","0942", "0944", "0945", "0925", "0926", "0988", "0989");

if(($firstfourno == $telenor[0] || $firstfourno == $telenor[1] || $firstfourno == $telenor[2] || $firstfourno == $telenor[3] || $firstfourno == $telenor[4] || $firstfourno == $telenor[5]) && ($countphno == 10)) {
    echo "Your Phone Number is Telenor";
}

else 
if(($firstfourno == $ooredoo[0] || $firstfourno == $ooredoo[1] || $firstfourno == $ooredoo[2] || $firstfourno == $ooredoo[3] || $firstfourno == $ooredoo[4] || $firstfourno == $ooredoo[5] ) &&  ($countphno == 10)) {
    echo "Your Phone Number is Ooredoo";
}

else if(($firstfourno == $mytel[0] || $firstfourno == $mytel[1] || $firstfourno == $mytel[2] || $firstfourno == $mytel[3] || $firstfourno == $mytel[4] ) &&  ($countphno == 10)){
    echo "Your Phone Number is Mytel";
}

else if(($firstfourno == $mpt[0] || $firstfourno == $mpt[1] || $firstfourno == $mpt[2] || $firstfourno == $mpt[3] ) &&  ($countphno == 8)){
    echo "Your Phone Number is MPT";
}

else if(($firstfourno == $mpt[4] || $firstfourno == $mpt[5] || $firstfourno == $mpt[6] || $firstfourno == $mpt[7] ) &&  ($countphno == 9)){
    echo "Your Phone Number is MPT";
}

else if(($firstfourno == $mpt[8] || $firstfourno == $mpt[9] || $firstfourno == $mpt[10] || $firstfourno == $mpt[11] || $firstfourno == $mpt[12] || $firstfourno == $mpt[13] || $firstfourno == $mpt[14] || $firstfourno == $mpt[15] || $firstfourno == $mpt[16] ) &&  ($countphno == 10)){
    echo "Your Phone Number is MPT";
}

else {
    echo "Your Phone Number is Wrong!! Please check again!!";
}

