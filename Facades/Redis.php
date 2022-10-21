<?php

namespace IgniteKit\Backports\Support\Facades;

/**
 * @method static \IgniteKit\Backports\Redis\Connections\Connection connection(string $name = null)
 *
 * @see \IgniteKit\Backports\Redis\RedisManager
 * @see \IgniteKit\Backports\Contracts\Redis\Factory
 */
class Redis extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redis';
    }
}
