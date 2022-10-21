<?php

namespace IgniteKit\Backports\Support\Facades;

use IgniteKit\Backports\Notifications\ChannelManager;
use IgniteKit\Backports\Notifications\AnonymousNotifiable;
use IgniteKit\Backports\Support\Testing\Fakes\NotificationFake;

/**
 * @method static void send(\IgniteKit\Backports\Support\Collection|array|mixed $notifiables, $notification)
 * @method static void sendNow(\IgniteKit\Backports\Support\Collection|array|mixed $notifiables, $notification)
 * @method static mixed channel(string|null $name = null)
 * @method static \IgniteKit\Backports\Notifications\ChannelManager locale(string|null $locale)
 *
 * @see \IgniteKit\Backports\Notifications\ChannelManager
 */
class Notification extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return \IgniteKit\Backports\Support\Testing\Fakes\NotificationFake
     */
    public static function fake()
    {
        static::swap($fake = new NotificationFake);

        return $fake;
    }

    /**
     * Begin sending a notification to an anonymous notifiable.
     *
     * @param  string  $channel
     * @param  mixed  $route
     * @return \IgniteKit\Backports\Notifications\AnonymousNotifiable
     */
    public static function route($channel, $route)
    {
        return (new AnonymousNotifiable)->route($channel, $route);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ChannelManager::class;
    }
}
