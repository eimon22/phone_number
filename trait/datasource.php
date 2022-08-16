<?php

class DataSource{
    const MPT_PATTERN_FOR_MATCHING = '/^(09|\+?959)(2[0-4]\d{5}|5[0-6]\d{5}|8[13-7]\d{5}|4[1379]\d{6}|73\d{6}|91\d{6}|25\d{7}|26[0-5]\d{6}|40[0-4]\d{6}|42\d{7}|44[0-589]\d{6}|45\d{7}|87\d{7}|89[6789]\d{6})$/';
    const TELENOR_PATTERN_FOR_MATCHING = '/^(09|\+?959)7\d{8}$/';
    const OOREDOO_PATTERN_FOR_MATCHING = '/^(09|\+?959)9\d{8}$/';
    const MYTEL_PATTERN_FOR_MATCHING = '/^(09|\+?959)6\d{8}$/';

    const MPT = 'MPT';
    const TELENOR = 'TELENOR';
    const OOREDOO = 'OOREDOO';
    const MYTEL = 'MYTEL';

    protected $regionCode = 'MM';
    protected $prefixCode = '95';
    protected $normalizeMaxLength = 11;
    protected $pureNumberMinLength = 7;

    // Get Region Code
    public function getRegionCode(): string {
        return $this->regionCode;
    }

    // Get Prefix Code
    public function getPrefixCode(): string {
        return this->prefixCode;
    }

    //Max Length of Phone Number
    public function getNormalizeMaxLength(): int {
        return $this->normalizeMaxLength;
    }

    // Min Length of Phone Number
    public function getNormalizeMinLength() : int {
        return $this->pureNumberMinLength;
    }
}