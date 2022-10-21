<?php

namespace IgniteKit\Backports\Support\Facades;

/**
 * @method static mixed guard(string|null $name = null)
 * @method static void shouldUse(string $name);
 * @method static bool check()
 * @method static bool guest()
 * @method static \IgniteKit\Backports\Contracts\Auth\Authenticatable|null user()
 * @method static int|null id()
 * @method static bool validate(array $credentials = [])
 * @method static void setUser(\IgniteKit\Backports\Contracts\Auth\Authenticatable $user)
 * @method static bool attempt(array $credentials = [], bool $remember = false)
 * @method static bool once(array $credentials = [])
 * @method static void login(\IgniteKit\Backports\Contracts\Auth\Authenticatable $user, bool $remember = false)
 * @method static \IgniteKit\Backports\Contracts\Auth\Authenticatable loginUsingId(mixed $id, bool $remember = false)
 * @method static bool onceUsingId(mixed $id)
 * @method static bool viaRemember()
 * @method static void logout()
 * @method static \Symfony\Component\HttpFoundation\Response|null onceBasic(string $field = 'email',array $extraConditions = [])
 * @method static null|bool logoutOtherDevices(string $password, string $attribute = 'password')
 * @method static \IgniteKit\Backports\Contracts\Auth\UserProvider|null createUserProvider(string $provider = null)
 * @method static \IgniteKit\Backports\Auth\AuthManager extend(string $driver, \Closure $callback)
 * @method static \IgniteKit\Backports\Auth\AuthManager provider(string $name, \Closure $callback)
 *
 * @see \IgniteKit\Backports\Auth\AuthManager
 * @see \IgniteKit\Backports\Contracts\Auth\Factory
 * @see \IgniteKit\Backports\Contracts\Auth\Guard
 * @see \IgniteKit\Backports\Contracts\Auth\StatefulGuard
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'auth';
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array  $options
     * @return void
     */
    public static function routes(array $options = [])
    {
        static::$app->make('router')->auth($options);
    }
}
