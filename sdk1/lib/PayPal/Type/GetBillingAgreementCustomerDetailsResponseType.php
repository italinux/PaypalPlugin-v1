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
 * GetBillingAgreementCustomerDetailsResponseType
 *
 * @package PayPal
 */
class GetBillingAgreementCustomerDetailsResponseType extends AbstractResponseType
{
    var $GetBillingAgreementCustomerDetailsResponseDetails;

    function GetBillingAgreementCustomerDetailsResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'GetBillingAgreementCustomerDetailsResponseDetails' => 
              array (
                'required' => true,
                'type' => 'GetBillingAgreementCustomerDetailsResponseDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getGetBillingAgreementCustomerDetailsResponseDetails()
    {
        return $this->GetBillingAgreementCustomerDetailsResponseDetails;
    }
    function setGetBillingAgreementCustomerDetailsResponseDetails($GetBillingAgreementCustomerDetailsResponseDetails, $charset = 'iso-8859-1')
    {
        $this->GetBillingAgreementCustomerDetailsResponseDetails = $GetBillingAgreementCustomerDetailsResponseDetails;
        $this->_elements['GetBillingAgreementCustomerDetailsResponseDetails']['charset'] = $charset;
    }
}
