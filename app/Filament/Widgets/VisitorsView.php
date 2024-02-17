<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class VisitorsView extends BaseWidget
{
    protected static ?int $sort = 0;
    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        $totalVisitors = DB::table('visitors')->count();

        $currentWeekStart = Carbon::now()->startOfWeek();
        $weeklyVisitors = DB::table('visitors')
            ->where('created_at', '>=', $currentWeekStart)
            ->count();

        $currentMonthStart = Carbon::now()->startOfMonth();
        $monthlyVisitors = DB::table('visitors')
            ->where('created_at', '>=', $currentMonthStart)
            ->count();

        $currentDay = Carbon::now()->startOfDay();
        $dailyVisitors = DB::table('visitors')
            ->where('created_at', '>=', $currentDay)
            ->count();
        return [
            Stat::make('Total Visitors', $totalVisitors),
            Stat::make('This Month', $monthlyVisitors),
            Stat::make('This Week', $weeklyVisitors),
            Stat::make('Today', $dailyVisitors),
        ];
    }
}
