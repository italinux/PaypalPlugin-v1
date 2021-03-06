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
 * SetAccessPermissionsRequestType
 *
 * @package PayPal
 */
class SetAccessPermissionsRequestType extends AbstractRequestType
{
    var $SetAccessPermissionsRequestDetails;

    function SetAccessPermissionsRequestType()
    {
        parent::AbstractRequestType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'SetAccessPermissionsRequestDetails' => 
              array (
                'required' => true,
                'type' => 'SetAccessPermissionsRequestDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getSetAccessPermissionsRequestDetails()
    {
        return $this->SetAccessPermissionsRequestDetails;
    }
    function setSetAccessPermissionsRequestDetails($SetAccessPermissionsRequestDetails, $charset = 'iso-8859-1')
    {
        $this->SetAccessPermissionsRequestDetails = $SetAccessPermissionsRequestDetails;
        $this->_elements['SetAccessPermissionsRequestDetails']['charset'] = $charset;
    }
}
