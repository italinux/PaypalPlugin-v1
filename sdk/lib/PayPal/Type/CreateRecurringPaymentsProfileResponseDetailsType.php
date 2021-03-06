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
require_once 'PayPal/Type/XSDSimpleType.php';

/**
 * CreateRecurringPaymentsProfileResponseDetailsType
 *
 * @package PayPal
 */
class CreateRecurringPaymentsProfileResponseDetailsType extends XSDSimpleType
{
    /**
     * Recurring Billing Profile ID
     */
    var $ProfileID;

    /**
     * Recurring Billing Profile Status
     */
    var $ProfileStatus;

    function CreateRecurringPaymentsProfileResponseDetailsType()
    {
        parent::XSDSimpleType();
        $this->_namespace = 'urn:ebay:apis:eBLBaseComponents';
        $this->_elements = array_merge($this->_elements,
            array (
              'ProfileID' => 
              array (
                'required' => true,
                'type' => 'string',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
              'ProfileStatus' => 
              array (
                'required' => false,
                'type' => 'RecurringPaymentsProfileStatusType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getProfileID()
    {
        return $this->ProfileID;
    }
    function setProfileID($ProfileID, $charset = 'iso-8859-1')
    {
        $this->ProfileID = $ProfileID;
        $this->_elements['ProfileID']['charset'] = $charset;
    }
    function getProfileStatus()
    {
        return $this->ProfileStatus;
    }
    function setProfileStatus($ProfileStatus, $charset = 'iso-8859-1')
    {
        $this->ProfileStatus = $ProfileStatus;
        $this->_elements['ProfileStatus']['charset'] = $charset;
    }
}
