<?php

namespace Blocktrail\SDK;

use BitWasp\Bitcoin\Address\AddressInterface;
use BitWasp\Bitcoin\Script\ScriptInterface;

class UTXO {

    const MODE_DONTSIGN = 'dont_sign';
    const MODE_SIGN = 'sign';

    public $hash;
    public $index;
    public $value;

    /**
     * @var AddressInterface
     */
    public $address;

    /**
     * @var ScriptInterface
     */
    public $scriptPubKey;
    public $path;

    /**
     * @var ScriptInterface
     */
    public $redeemScript;
    public $signMode;

    public function __construct($hash, $index, $value = null, AddressInterface $address = null, ScriptInterface $scriptPubKey = null, $path = null, ScriptInterface $redeemScript = null, $signMode = self::MODE_SIGN) {
        $this->hash = $hash;
        $this->index = $index;
        $this->value = $value;
        $this->address = $address;
        $this->scriptPubKey = $scriptPubKey;
        $this->path = $path;
        $this->redeemScript = $redeemScript;
        $this->signMode = $signMode ? $signMode : self::MODE_SIGN;
    }
}
