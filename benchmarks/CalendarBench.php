<?php declare(strict_types=1);

namespace Fisharebest\ExtCalendar\Benchmarks;

use Fisharebest\ExtCalendar\ArabicCalendar;
use Fisharebest\ExtCalendar\FrenchCalendar;
use Fisharebest\ExtCalendar\GregorianCalendar;
use Fisharebest\ExtCalendar\JewishCalendar;
use Fisharebest\ExtCalendar\JulianCalendar;
use Fisharebest\ExtCalendar\PersianCalendar;
use PhpBench\Attributes\BeforeMethods;
use PhpBench\Attributes\Groups;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;

#[Revs(1000)]
#[Iterations(5)]
class CalendarBench
{
    private GregorianCalendar $gregorian;
    private JulianCalendar $julian;
    private FrenchCalendar $french;
    private JewishCalendar $jewish;
    private ArabicCalendar $arabic;
    private PersianCalendar $persian;

    public function setUp(): void
    {
        $this->gregorian = new GregorianCalendar();
        $this->julian = new JulianCalendar();
        $this->french = new FrenchCalendar();
        $this->jewish = new JewishCalendar();
        $this->arabic = new ArabicCalendar();
        $this->persian = new PersianCalendar();
    }

    // --- JD to YMD: native vs OOP ---

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'native'])]
    public function benchNativeJdToFrench(): void
    {
        explode('/', jdtofrench(2380947));
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'oop'])]
    public function benchFrenchCalendarJdToYmd(): void
    {
        $this->french->jdToYmd(2380947);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'native'])]
    public function benchNativeJdToGregorian(): void
    {
        explode('/', jdtogregorian(2380947));
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'oop'])]
    public function benchGregorianCalendarJdToYmd(): void
    {
        $this->gregorian->jdToYmd(2380947);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'native'])]
    public function benchNativeJdToJewish(): void
    {
        explode('/', jdtojewish(2380947));
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'oop'])]
    public function benchJewishCalendarJdToYmd(): void
    {
        $this->jewish->jdToYmd(2380947);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'native'])]
    public function benchNativeJdToJulian(): void
    {
        explode('/', jdtojulian(2380947));
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'oop'])]
    public function benchJulianCalendarJdToYmd(): void
    {
        $this->julian->jdToYmd(2380947);
    }

    // --- YMD to JD: native vs OOP ---

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'native'])]
    public function benchNativeFrenchToJd(): void
    {
        frenchtojd(12, 31, 14);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'oop'])]
    public function benchFrenchCalendarYmdToJd(): void
    {
        $this->french->ymdToJd(14, 12, 31);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'native'])]
    public function benchNativeGregorianToJd(): void
    {
        gregoriantojd(12, 31, 2014);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'oop'])]
    public function benchGregorianCalendarYmdToJd(): void
    {
        $this->gregorian->ymdToJd(2014, 12, 31);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'native'])]
    public function benchNativeJewishToJd(): void
    {
        jewishtojd(13, 29, 2014);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'oop'])]
    public function benchJewishCalendarYmdToJd(): void
    {
        $this->jewish->ymdToJd(2014, 13, 29);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'native'])]
    public function benchNativeJulianToJd(): void
    {
        juliantojd(12, 31, 2014);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'oop'])]
    public function benchJulianCalendarYmdToJd(): void
    {
        $this->julian->ymdToJd(2014, 12, 31);
    }

    // --- daysInMonth: native vs OOP ---

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'native'])]
    public function benchNativeDaysInMonthFrench(): void
    {
        cal_days_in_month(\CAL_FRENCH, 13, 13);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'oop'])]
    public function benchFrenchCalendarDaysInMonth(): void
    {
        $this->french->daysInMonth(13, 13);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'native'])]
    public function benchNativeDaysInMonthGregorian(): void
    {
        cal_days_in_month(\CAL_GREGORIAN, 2, 2014);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'oop'])]
    public function benchGregorianCalendarDaysInMonth(): void
    {
        $this->gregorian->daysInMonth(2014, 2);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'native'])]
    public function benchNativeDaysInMonthJewish(): void
    {
        cal_days_in_month(\CAL_JEWISH, 2, 5714);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'oop'])]
    public function benchJewishCalendarDaysInMonth(): void
    {
        $this->jewish->daysInMonth(5714, 2);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'native'])]
    public function benchNativeDaysInMonthJulian(): void
    {
        cal_days_in_month(\CAL_JULIAN, 2, 2014);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['daysInMonth', 'oop'])]
    public function benchJulianCalendarDaysInMonth(): void
    {
        $this->julian->daysInMonth(2014, 2);
    }

    // --- OOP-only calendars (no native equivalent) ---

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'oop'])]
    public function benchArabicCalendarJdToYmd(): void
    {
        $this->arabic->jdToYmd(2380947);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'oop'])]
    public function benchArabicCalendarYmdToJd(): void
    {
        $this->arabic->ymdToJd(1435, 12, 29);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['jdToYmd', 'oop'])]
    public function benchPersianCalendarJdToYmd(): void
    {
        $this->persian->jdToYmd(2380947);
    }

    #[BeforeMethods('setUp')]
    #[Groups(['ymdToJd', 'oop'])]
    public function benchPersianCalendarYmdToJd(): void
    {
        $this->persian->ymdToJd(1393, 10, 10);
    }
}
