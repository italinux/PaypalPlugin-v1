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
 * MassPayResponseType
 *
 * @package PayPal
 */
class MassPayResponseType extends AbstractResponseType
{
    function MassPayResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
    }

}
