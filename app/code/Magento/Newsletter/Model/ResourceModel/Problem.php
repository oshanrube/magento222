<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Newsletter\Model\ResourceModel;

/**
 * Newsletter problem resource model
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Problem extends \Magento\Framework\Model\ModelResource\Db\AbstractDb
{
    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('newsletter_problem', 'problem_id');
    }
}
