<?php

namespace IgniteKit\Backports\Support\Facades;

use IgniteKit\Backports\Support\DateFactory;

/**
 * @see https://carbon.nesbot.com/docs/
 * @see https://github.com/briannesbitt/Carbon/blob/master/src/Carbon/Factory.php
 *
 * @method static \IgniteKit\Backports\Support\Carbon create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon createFromDate($year = null, $month = null, $day = null, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon|false createFromFormat($format, $time, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon createFromTimeString($time, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon createFromTimestamp($timestamp, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon createFromTimestampMs($timestamp, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon createFromTimestampUTC($timestamp)
 * @method static \IgniteKit\Backports\Support\Carbon createMidnightDate($year = null, $month = null, $day = null, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon|false createSafe($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon disableHumanDiffOption($humanDiffOption)
 * @method static \IgniteKit\Backports\Support\Carbon enableHumanDiffOption($humanDiffOption)
 * @method static mixed executeWithLocale($locale, $func)
 * @method static \IgniteKit\Backports\Support\Carbon fromSerialized($value)
 * @method static array getAvailableLocales()
 * @method static array getDays()
 * @method static int getHumanDiffOptions()
 * @method static array getIsoUnits()
 * @method static \IgniteKit\Backports\Support\Carbon getLastErrors()
 * @method static string getLocale()
 * @method static int getMidDayAt()
 * @method static \IgniteKit\Backports\Support\Carbon getTestNow()
 * @method static \Symfony\Component\Translation\TranslatorInterface getTranslator()
 * @method static int getWeekEndsAt()
 * @method static int getWeekStartsAt()
 * @method static array getWeekendDays()
 * @method static bool hasFormat($date, $format)
 * @method static bool hasMacro($name)
 * @method static bool hasRelativeKeywords($time)
 * @method static bool hasTestNow()
 * @method static \IgniteKit\Backports\Support\Carbon instance($date)
 * @method static bool isImmutable()
 * @method static bool isModifiableUnit($unit)
 * @method static \IgniteKit\Backports\Support\Carbon isMutable()
 * @method static bool isStrictModeEnabled()
 * @method static bool localeHasDiffOneDayWords($locale)
 * @method static bool localeHasDiffSyntax($locale)
 * @method static bool localeHasDiffTwoDayWords($locale)
 * @method static bool localeHasPeriodSyntax($locale)
 * @method static bool localeHasShortUnits($locale)
 * @method static void macro($name, $macro)
 * @method static \IgniteKit\Backports\Support\Carbon|null make($var)
 * @method static \IgniteKit\Backports\Support\Carbon maxValue()
 * @method static \IgniteKit\Backports\Support\Carbon minValue()
 * @method static void mixin($mixin)
 * @method static \IgniteKit\Backports\Support\Carbon now($tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon parse($time = null, $tz = null)
 * @method static string pluralUnit(string $unit)
 * @method static void resetMonthsOverflow()
 * @method static void resetToStringFormat()
 * @method static void resetYearsOverflow()
 * @method static void serializeUsing($callback)
 * @method static \IgniteKit\Backports\Support\Carbon setHumanDiffOptions($humanDiffOptions)
 * @method static bool setLocale($locale)
 * @method static void setMidDayAt($hour)
 * @method static \IgniteKit\Backports\Support\Carbon setTestNow($testNow = null)
 * @method static void setToStringFormat($format)
 * @method static void setTranslator(\Symfony\Component\Translation\TranslatorInterface $translator)
 * @method static \IgniteKit\Backports\Support\Carbon setUtf8($utf8)
 * @method static void setWeekEndsAt($day)
 * @method static void setWeekStartsAt($day)
 * @method static void setWeekendDays($days)
 * @method static bool shouldOverflowMonths()
 * @method static bool shouldOverflowYears()
 * @method static string singularUnit(string $unit)
 * @method static \IgniteKit\Backports\Support\Carbon today($tz = null)
 * @method static \IgniteKit\Backports\Support\Carbon tomorrow($tz = null)
 * @method static void useMonthsOverflow($monthsOverflow = true)
 * @method static \IgniteKit\Backports\Support\Carbon useStrictMode($strictModeEnabled = true)
 * @method static void useYearsOverflow($yearsOverflow = true)
 * @method static \IgniteKit\Backports\Support\Carbon yesterday($tz = null)
 */
class Date extends Facade
{
    const DEFAULT_FACADE = DateFactory::class;

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'date';
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param  string  $name
     * @return mixed
     */
    protected static function resolveFacadeInstance($name)
    {
        if (! isset(static::$resolvedInstance[$name]) && ! isset(static::$app, static::$app[$name])) {
            $class = static::DEFAULT_FACADE;

            static::swap(new $class);
        }

        return parent::resolveFacadeInstance($name);
    }
}