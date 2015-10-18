<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 *
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\WebBundle\Controller\Front;

use WellCommerce\Bundle\CoreBundle\Controller\AbstractController;
use WellCommerce\Bundle\CoreBundle\Controller\Front\FrontControllerInterface;

/**
 * Class HomePageController
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class HomePageController extends AbstractController implements FrontControllerInterface
{
    public function indexAction()
    {
        return $this->displayTemplate('index');
    }
}
