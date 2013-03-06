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
require_once 'PayPal/Type/AbstractRequestType.php';

/**
 * GetBalanceRequestType
 *
 * @package PayPal
 */
class GetBalanceRequestType extends AbstractRequestType
{
    var $ReturnAllCurrencies;

    function GetBalanceRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'ReturnAllCurrencies' => 
              array (
                'required' => false,
                'type' => 'string',
                'namespace' => 'urn:ebay:api:PayPalAPI',
              ),
            ));
    }

    function getReturnAllCurrencies()
    {
        return $this->ReturnAllCurrencies;
    }
    function setReturnAllCurrencies($ReturnAllCurrencies, $charset = 'iso-8859-1')
    {
        $this->ReturnAllCurrencies = $ReturnAllCurrencies;
        $this->_elements['ReturnAllCurrencies']['charset'] = $charset;
    }
}
