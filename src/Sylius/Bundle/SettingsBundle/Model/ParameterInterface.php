<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\SettingsBundle\Model;

/**
 * @author Paweł Jędrzejewski <pjedrzejewski@sylius.pl>
 */
interface ParameterInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return SettingsInterface
     */
    public function getSettings();

    /**
     * @param SettingsInterface $settings
     */
    public function setSettings(SettingsInterface $settings);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     */
    public function setValue($value);
}
