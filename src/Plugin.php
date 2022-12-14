<?php

declare(strict_types=1);

namespace ComposerIntegration;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider as ComposerCommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

final class Plugin implements PluginInterface, Capable
{
    public function getCapabilities(): array
    {
        return [
            ComposerCommandProvider::class => CommandProvider::class,
        ];
    }

    public function activate(Composer $composer, IOInterface $io): void
    {
        // Nothing to see here, everything is applied via commands
    }

    public function deactivate(Composer $composer, IOInterface $io): void
    {
        // Nothing to see here, everything is applied via commands
    }

    public function uninstall(Composer $composer, IOInterface $io): void
    {
        // Nothing to see here, everything is applied via commands
    }
}
