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
require_once 'PayPal/Type/AbstractResponseType.php';

/**
 * GetRecurringPaymentsProfileDetailsResponseType
 *
 * @package PayPal
 */
class GetRecurringPaymentsProfileDetailsResponseType extends AbstractResponseType
{
    var $GetRecurringPaymentsProfileDetailsResponseDetails;

    function GetRecurringPaymentsProfileDetailsResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'GetRecurringPaymentsProfileDetailsResponseDetails' => 
              array (
                'required' => true,
                'type' => 'GetRecurringPaymentsProfileDetailsResponseDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getGetRecurringPaymentsProfileDetailsResponseDetails()
    {
        return $this->GetRecurringPaymentsProfileDetailsResponseDetails;
    }
    function setGetRecurringPaymentsProfileDetailsResponseDetails($GetRecurringPaymentsProfileDetailsResponseDetails, $charset = 'iso-8859-1')
    {
        $this->GetRecurringPaymentsProfileDetailsResponseDetails = $GetRecurringPaymentsProfileDetailsResponseDetails;
        $this->_elements['GetRecurringPaymentsProfileDetailsResponseDetails']['charset'] = $charset;
    }
}
