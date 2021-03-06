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
 * GetAuthDetailsResponseType
 *
 * @package PayPal
 */
class GetAuthDetailsResponseType extends AbstractResponseType
{
    var $GetAuthDetailsResponseDetails;

    function GetAuthDetailsResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'GetAuthDetailsResponseDetails' => 
              array (
                'required' => true,
                'type' => 'GetAuthDetailsResponseDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getGetAuthDetailsResponseDetails()
    {
        return $this->GetAuthDetailsResponseDetails;
    }
    function setGetAuthDetailsResponseDetails($GetAuthDetailsResponseDetails, $charset = 'iso-8859-1')
    {
        $this->GetAuthDetailsResponseDetails = $GetAuthDetailsResponseDetails;
        $this->_elements['GetAuthDetailsResponseDetails']['charset'] = $charset;
    }
}
