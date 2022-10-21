<?php

namespace IgniteKit\Backports\Support\Facades;

/**
 * @method static \IgniteKit\Backports\Routing\Route get(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route post(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route put(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route delete(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route patch(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route options(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route any(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\Route match(array|string $methods, string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar prefix(string  $prefix)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar where(array  $where)
 * @method static \IgniteKit\Backports\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \IgniteKit\Backports\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static void apiResources(array $resources)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar middleware(array|string|null $middleware)
 * @method static \IgniteKit\Backports\Routing\Route substituteBindings(\IgniteKit\Backports\Support\Facades\Route $route)
 * @method static void substituteImplicitBindings(\IgniteKit\Backports\Support\Facades\Route $route)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar as(string $value)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar domain(string $value)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar name(string $value)
 * @method static \IgniteKit\Backports\Routing\RouteRegistrar namespace(string $value)
 * @method static \IgniteKit\Backports\Routing\Router|\IgniteKit\Backports\Routing\RouteRegistrar group(array|\Closure|string $attributes, \Closure|string $routes)
 * @method static \IgniteKit\Backports\Routing\Route redirect(string $uri, string $destination, int $status = 302)
 * @method static \IgniteKit\Backports\Routing\Route permanentRedirect(string $uri, string $destination)
 * @method static \IgniteKit\Backports\Routing\Route view(string $uri, string $view, array $data = [])
 * @method static void bind(string $key, string|callable $binder)
 * @method static void model(string $key, string $class, \Closure|null $callback = null)
 * @method static \IgniteKit\Backports\Routing\Route current()
 * @method static string|null currentRouteName()
 * @method static string|null currentRouteAction()
 *
 * @see \IgniteKit\Backports\Routing\Router
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
