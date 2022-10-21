<?php

namespace IgniteKit\Backports\Support\Facades;

use IgniteKit\Backports\Contracts\Auth\Access\Gate as GateContract;

/**
 * @method static bool has(string $ability)
 * @method static \IgniteKit\Backports\Contracts\Auth\Access\Gate define(string $ability, callable|string $callback)
 * @method static \IgniteKit\Backports\Contracts\Auth\Access\Gate policy(string $class, string $policy)
 * @method static \IgniteKit\Backports\Contracts\Auth\Access\Gate before(callable $callback)
 * @method static \IgniteKit\Backports\Contracts\Auth\Access\Gate after(callable $callback)
 * @method static bool allows(string $ability, array|mixed $arguments = [])
 * @method static bool denies(string $ability, array|mixed $arguments = [])
 * @method static bool check(iterable|string $abilities, array|mixed $arguments = [])
 * @method static bool any(iterable|string $abilities, array|mixed $arguments = [])
 * @method static \IgniteKit\Backports\Auth\Access\Response authorize(string $ability, array|mixed $arguments = [])
 * @method static mixed raw(string $ability, array|mixed $arguments = [])
 * @method static mixed getPolicyFor(object|string $class)
 * @method static \IgniteKit\Backports\Contracts\Auth\Access\Gate forUser(\IgniteKit\Backports\Contracts\Auth\Authenticatable|mixed $user)
 * @method static array abilities()
 *
 * @see \IgniteKit\Backports\Contracts\Auth\Access\Gate
 */
class Gate extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return GateContract::class;
    }
}
