<?php

namespace App\Filament\Widgets;

use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $articleTrend = $this->getTrend(Article::class);
        $categoryTrend = $this->getTrend(Category::class);
        $advertiseTrend = $this->getTrend(Advertise::class);

        return [
            Stat::make('Total Articles', Article::count())
                ->description($articleTrend['text'])
                ->descriptionIcon($articleTrend['icon'])
                ->color($articleTrend['color']),

            Stat::make('Total Categories', Category::count())
                ->description($categoryTrend['text'])
                ->descriptionIcon($categoryTrend['icon'])
                ->color($categoryTrend['color']),

            Stat::make('Total Advertises', Advertise::count())
                ->description($advertiseTrend['text'])
                ->descriptionIcon($advertiseTrend['icon'])
                ->color($advertiseTrend['color']),
        ];
    }

    private function getTrend($model)
    {
        $current = $model::whereMonth('created_at', Carbon::now()->month)->count();
        $previous = $model::whereMonth('created_at', Carbon::now()->subMonth()->month)->count();

        $percentage = $previous > 0
            ? (($current - $previous) / $previous) * 100
            : 0;

        $isIncrease = $percentage >= 0;

        return [
            'text' => abs(round($percentage, 2)) . '% ' . ($isIncrease ? 'increase' : 'decrease'),
            'icon' => $isIncrease ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down',
            'color' => $isIncrease ? 'success' : 'danger',
        ];
    }
}
