<?php

namespace IgniteKit\Backports\Support\Facades;

use IgniteKit\Backports\Support\Testing\Fakes\BusFake;
use IgniteKit\Backports\Contracts\Bus\Dispatcher as BusDispatcherContract;

/**
 * @method static mixed dispatch($command)
 * @method static mixed dispatchNow($command, $handler = null)
 * @method static bool hasCommandHandler($command)
 * @method static bool|mixed getCommandHandler($command)
 * @method static \IgniteKit\Backports\Contracts\Bus\Dispatcher pipeThrough(array $pipes)
 * @method static \IgniteKit\Backports\Contracts\Bus\Dispatcher map(array $map)
 *
 * @see \IgniteKit\Backports\Contracts\Bus\Dispatcher
 */
class Bus extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return \IgniteKit\Backports\Support\Testing\Fakes\BusFake
     */
    public static function fake()
    {
        static::swap($fake = new BusFake);

        return $fake;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BusDispatcherContract::class;
    }
}
