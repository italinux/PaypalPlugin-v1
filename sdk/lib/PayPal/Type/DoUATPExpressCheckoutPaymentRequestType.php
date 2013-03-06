<?php
/*
 * This file is part of the ItaPaypalPlugin package.
 * (c) Matteo Montanari <matteo@italinux.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @package PayPal
 */

/**
 * Make sure our parent class is defined.
 */
require_once 'PayPal/Type/DoExpressCheckoutPaymentRequestType.php';

/**
 * DoUATPExpressCheckoutPaymentRequestType
 *
 * @package PayPal
 */
class DoUATPExpressCheckoutPaymentRequestType extends DoExpressCheckoutPaymentRequestType
{
    function DoUATPExpressCheckoutPaymentRequestType()
    {
        parent::DoExpressCheckoutPaymentRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
    }

}
