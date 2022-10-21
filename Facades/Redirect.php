<?php

namespace IgniteKit\Backports\Support\Facades;

/**
 * @method static \IgniteKit\Backports\Http\RedirectResponse home(int $status = 302)
 * @method static \IgniteKit\Backports\Http\RedirectResponse back(int $status = 302, array $headers = [], $fallback = false)
 * @method static \IgniteKit\Backports\Http\RedirectResponse refresh(int $status = 302, array $headers = [])
 * @method static \IgniteKit\Backports\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool $secure = null)
 * @method static intended(string $default = '/', int $status = 302, array $headers = [], bool $secure = null)
 * @method static \IgniteKit\Backports\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool $secure = null)
 * @method static \IgniteKit\Backports\Http\RedirectResponse away(string $path, int $status = 302, array $headers = [])
 * @method static \IgniteKit\Backports\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = [])
 * @method static \IgniteKit\Backports\Http\RedirectResponse route(string $route, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \IgniteKit\Backports\Http\RedirectResponse action(string $action, array $parameters = [], int $status = 302, array $headers = [])
 * @method static \IgniteKit\Backports\Routing\UrlGenerator getUrlGenerator()
 * @method static void setSession(\IgniteKit\Backports\Session\Store $session)
 *
 * @see \IgniteKit\Backports\Routing\Redirector
 */
class Redirect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redirect';
    }
}
