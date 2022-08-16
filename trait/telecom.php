<?php 
include('datasource.php');
trait Telecom {
    
    // Is Operator??    
    protected function isOperator(string $number = null, string $pattern): bool
    {
        if (is_null($number)) {
            // $number = $this->formatE164();
        } else {
            $number = $this->parseStrPhoneNumber($number);
        }

        return (bool)preg_match($pattern, $number);
    }

    // Is Telenor??
    public function isTelenor(string $number=null) :bool {
        return $this->isOperator($number, DataSource::TELENOR_PATTERN_FOR_MATCHING);
    }

    //  Is Ooredoo??
    public function isOoredoo(string $number=null) : bool {
        return $this->isOperator($number, DataSource::OOREDOO_PATTERN_FOR_MATCHING);
    }

    // Is Mytel??
    public function isMytel(string $number=null) : bool {
        return $this->isOperator($number, DataSource::MYTEL_PATTERN_FOR_MATCHING);
    }

    // Is MPT??
    public function isMpt(string $number=null) : bool {
        return $this->isOperator($number, DataSource::MPT_PATTERN_FOR_MATCHING);
    }

    // Telecom Checking
    public function telecom(string $number=null) : string {
        if($this->isTelenor($number)) {
            return DataSource::TELENOR;
        }
        if($this->isOoredoo($number)) {
            return DataSource::OOREDOO;
        }
        if($this->isMytel($number)) {
            return DataSource::MYTEL;
        }
        if($this->isMpt($number)) {
            return DataSource::MPT;
        }

       return "Invalid Phone Number!!!";
    }

    public function operator(string $number = null): string
    {
        return $this->telecom($number);
    }


}

class telecom_mm {
    use Telecom;
}

$tel = new telecom_mm();
$tel->Telecom();