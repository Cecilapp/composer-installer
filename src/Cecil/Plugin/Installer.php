<?php
namespace Cecil\Installer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class Installer extends LibraryInstaller
{
    const TYPE_PLUGIN = 'cecil-plugin';
    const TYPE_THEME = 'cecil-theme';

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        switch($package->getType())
        {
            case self::TYPE_PLUGIN:
                $dir = 'plugins';
                break;
            case self::TYPE_THEME:
                $dir = 'themes';
                break;
        }

        return $dir . '/' . $this->getExtraName($package);
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return in_array($packageType, [self::TYPE_PLUGIN, self::TYPE_THEME], true);
    }

    /**
     * Get the name from the package extra info
     *
     * @throws \InvalidArgumentException
     */
    protected function getExtraName(PackageInterface $package): string
    {
        $extraData = $package->getExtra();
        if (!array_key_exists('name', $extraData)) {
            throw new \InvalidArgumentException(sprintf('Unable to install "%s", it must include the name in the extra field of composer.json.', $package->getName()));
        }

        return $extraData['name'];
    }
}
