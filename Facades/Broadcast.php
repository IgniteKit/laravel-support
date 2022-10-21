<?php

namespace IgniteKit\Backports\Support\Facades;

use IgniteKit\Backports\Contracts\Broadcasting\Factory as BroadcastingFactoryContract;

/**
 * @method static void connection($name = null);
 * @method static \IgniteKit\Backports\Broadcasting\Broadcasters\Broadcaster channel(string $channel, callable|string  $callback)
 * @method static mixed auth(\IgniteKit\Backports\Http\Request $request)
 *
 * @see \IgniteKit\Backports\Contracts\Broadcasting\Factory
 */
class Broadcast extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BroadcastingFactoryContract::class;
    }
}
