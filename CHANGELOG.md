CHANGE LOG
==========

## 3.0.0 (2026-03-29)

This is the first release under the `CondorcetPHP\PhpCalendars` namespace,
forked from [fisharebest/ext-calendar](https://github.com/fisharebest/ext-calendar).

### Breaking changes
 - Rename namespace from `Fisharebest\ExtCalendar` to `CondorcetPHP\PhpCalendars`.
 - Rename Composer package from `fisharebest/ext-calendar` to `condorcet-php/php-calendars`.
 - Require PHP >= 8.5.
 - Invalid arguments now throw `ValueError` instead of triggering `E_USER_WARNING`.
 - All methods use native parameter and return type declarations.

### Added
 - PHPBench benchmarks (`composer bench`).

### Changed
 - Migrated test suite from PHPUnit to Pest.
 - Added PHPStan static analysis at level 10.
 - Added php-cs-fixer code style enforcement (`composer lint`).
 - Added Rector for automated refactoring (`composer rector`).
 - Removed 32-bit compatibility code (64-bit only).
 - Removed PHP bug emulation code.
 - Removed HHVM support.

---

*Versions 1.x–2.x were released under the original project [fisharebest/ext-calendar](https://github.com/fisharebest/ext-calendar).*

## 2.6.0 (2022-05-31)
 - Update error handling to match latest versions of PHP.
 - Add PHP 8 to the test matrix, and remove PHP 5.3 from it.

## 2.5.0 (2018-09-17)
 - Calculate number of months in a given year

## 2.4.0 (2018-01-15)
 - PHP error messages changed slightly in 7.2.0

## 2.3.1 (2018-01-15)
 - Update PHPdoc to use int/bool instead of integer/boolean

## 2.3.0 (2017-05-07)
 - Test against PHP 7.1
 - Use civil instead of astronomical calendar for Arabic (jon48)
 - Fix bugs in Hebrew calendar (jon48)
 - PHP bug 67976 now fixed, so we need to emulate it.

## 2.2.1 (2015-12-11)
 - HHVM tests failing

## 2.2.0 (2015-12-01)
 - Autoload shim functions

## 2.1.1 (2015-09-21)
 - Test against PHP 7.0

## 2.1.0 (2015-04-02)
 - Add JewishCalendar::numberToHebrewNumerals() to format Jewish dates

## 2.0.0 (2015-03-31)
 - Eliminate AbstractCalendar, just use CalendarInterface.
 - PHP bug 67960 now fixed, so we need to emulate it.

## 1.3.0 (2014-10-31)
 - Only emulate bugs in the shim functions, not when using the calendar classes.

## 1.2.0 (2014-09-27)
 - Improve coverage of unit tests.
 - Remove dependency on mb_string - generate Hebrew text directly in ISO-8859-8.
 - Code style tips from scrutinizer-ci.com.

## 1.1.2 (2014-09-16)
 - Fix #1; add support for the third parameter in jdtojewish().

## 1.1.1 (2014-09-14)
 - Cannot inherit abstract classes in PHP 5.3.0 - 5.3.8.

## 1.1.0 (2014-09-13)
 - Add support for Arabic (Hijri) and Persian (Jalali) calendars.
 - Convert logic to lookup tables for better performance.

## 1.0.3 (2014-09-12)
 - Simplify the way shims are created.

## 1.0.2 (2014-09-11)
 - Wrong encoding of Hebrew dates.
 - Emulate PHP bug 54254 in Hebrew dates.

## 1.0.1 (2014-09-11)
 - Improve coverage of unit tests.
 - Convert logic to lookup tables for better performance.

## 1.0.0 (2014-09-10)
 - Initial release, with support for all the functions and constants from `ext/calendar`.
