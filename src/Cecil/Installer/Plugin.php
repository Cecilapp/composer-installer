<?php
namespace Cecil\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        /* Not yet implemented */
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        /* Not yet implemented */
    }
}
