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
 * ManagePendingTransactionStatusRequestType
 *
 * @package PayPal
 */
class ManagePendingTransactionStatusRequestType extends AbstractRequestType
{
    var $TransactionID;

    var $Action;

    function ManagePendingTransactionStatusRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'TransactionID' => 
              array (
                'required' => true,
                'type' => 'TransactionId',
                'namespace' => 'urn:ebay:api:PayPalAPI',
              ),
              'Action' => 
              array (
                'required' => true,
                'type' => 'FMFPendingTransactionActionType',
                'namespace' => 'urn:ebay:api:PayPalAPI',
              ),
            ));
    }

    function getTransactionID()
    {
        return $this->TransactionID;
    }
    function setTransactionID($TransactionID, $charset = 'iso-8859-1')
    {
        $this->TransactionID = $TransactionID;
        $this->_elements['TransactionID']['charset'] = $charset;
    }
    function getAction()
    {
        return $this->Action;
    }
    function setAction($Action, $charset = 'iso-8859-1')
    {
        $this->Action = $Action;
        $this->_elements['Action']['charset'] = $charset;
    }
}
