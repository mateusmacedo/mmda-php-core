<?php

declare(strict_types=1);

namespace MMDA\Core\Infrastructure\Helpers;

use Psr\Container\ContainerInterface;

class Dependencies
{
    public static ContainerInterface $container;

    public static function getContainer(): ContainerInterface
    {
        return self::$container;
    }
}
