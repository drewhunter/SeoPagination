<?php

/**
 * This file is part of the Dh_Seopagination module for Magento.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP version 5.3
 *
 * @category  Dh
 * @package   Dh_Seopagination
 * @author    Drew Hunter <drewdhunter@gmail.com>
 * @copyright 2013 Drew Hunter
 * @license   http://opensource.org/licenses/MIT MIT License (MIT)
 * @link      https://github.com/drewhunter/SeoPagination
 */

/**
 * Data Helper.
 *
 * @category  Dh
 * @package   Dh_Seopagination
 * @author    Drew Hunter <drewdhunter@gmail.com>
 * @copyright 2013 Drew Hunter
 * @license   http://opensource.org/licenses/MIT MIT License (MIT)
 * @link      https://github.com/drewhunter/SeoPagination
 */
class Dh_Seopagination_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return false|Dh_Seopagination_Model_Paginator
     */
    public function initPaginator()
    {
        $services = Mage::getModel('dh_seopagination/services')
            ->getServices();

        return Mage::getModel('dh_seopagination/paginator', $services);
    }
}
