<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS;

/**
 * Obtain information about using version of tool.
 *
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
class ToolInfo
{
    /**
     * @deprecated
     */
    const COMPOSER_INSTALLED_FILE = '/../../composer/installed.json';

    const COMPOSER_PACKAGE_NAME = 'friendsofphp/php-cs-fixer';

    /**
     * @internal
     */
    const COMPOSER_LEGACY_PACKAGE_NAME = 'fabpot/php-cs-fixer';

    /**
     * @internal
     */
    public static function getComposerInstallationDetails()
    {
        static $result;

        if (!self::isInstalledByComposer()) {
            throw new \LogicException('Cannot get composer version for tool not installed by composer.');
        }

        if (null === $result) {
            $composerInstalled = json_decode(file_get_contents(self::getComposerInstalledFile()), true);

            foreach ($composerInstalled as $package) {
                if (in_array($package['name'], array(self::COMPOSER_PACKAGE_NAME, self::COMPOSER_LEGACY_PACKAGE_NAME), true)) {
                    $result = $package;
                    break;
                }
            }
        }

        return $result;
    }

    public static function getComposerVersion()
    {
        static $result;

        if (null === $result) {
            $package = self::getComposerInstallationDetails();
            $result = $package['version'].'#'.$package['dist']['reference'];
        }

        return $result;
    }

    public static function getVersion()
    {
        if (self::isInstalledByComposer()) {
            return Fixer::VERSION.':'.self::getComposerVersion();
        }

        return Fixer::VERSION;
    }

    public static function isInstalledAsPhar()
    {
        static $result;

        if (null === $result) {
            $result = 'phar://' === substr(__DIR__, 0, 7);
        }

        return $result;
    }

    public static function isInstalledByComposer()
    {
        static $result;

        if (null === $result) {
            $result = !self::isInstalledAsPhar() && file_exists(self::getComposerInstalledFile());
        }

        return $result;
    }

    private static function getComposerInstalledFile()
    {
        return __DIR__.'/../../../../composer/installed.json';
    }
}
