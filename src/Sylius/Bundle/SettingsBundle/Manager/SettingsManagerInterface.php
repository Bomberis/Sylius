<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SettingsBundle\Manager;

use Sylius\Bundle\SettingsBundle\Model\SettingsInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface SettingsManagerInterface
{
    /**
     * @param string $schema
     *
     * @return SettingsInterface
     */
    public function load($schema);

    /**
     * @param SettingsInterface $setting
     */
    public function save(SettingsInterface $setting);
}
