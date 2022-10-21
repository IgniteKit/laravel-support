<?php

namespace IgniteKit\Backports\Support\Facades;

use IgniteKit\Backports\Filesystem\Filesystem;

/**
 * @method static \IgniteKit\Backports\Contracts\Filesystem\Filesystem disk(string $name = null)
 *
 * @see \IgniteKit\Backports\Filesystem\FilesystemManager
 */
class Storage extends Facade
{
    /**
     * Replace the given disk with a local testing disk.
     *
     * @param  string|null  $disk
     *
     * @return \IgniteKit\Backports\Filesystem\Filesystem
     */
    public static function fake($disk = null)
    {
        $disk = $disk ?: self::$app['config']->get('filesystems.default');

        (new Filesystem)->cleanDirectory(
            $root = storage_path('framework/testing/disks/'.$disk)
        );

        static::set($disk, $fake = self::createLocalDriver(['root' => $root]));

        return $fake;
    }

    /**
     * Replace the given disk with a persistent local testing disk.
     *
     * @param  string|null  $disk
     * @return \IgniteKit\Backports\Filesystem\Filesystem
     */
    public static function persistentFake($disk = null)
    {
        $disk = $disk ?: self::$app['config']->get('filesystems.default');

        static::set($disk, $fake = self::createLocalDriver([
            'root' => storage_path('framework/testing/disks/'.$disk),
        ]));

        return $fake;
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filesystem';
    }
}
