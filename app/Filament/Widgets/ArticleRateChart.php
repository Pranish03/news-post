<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use Filament\Widgets\ChartWidget;

class ArticleRateChart extends ChartWidget
{
    protected ?string $heading = 'Article Rate Chart';
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected ?string $maxHeight = '500px';

    public ?string $filter = null;

    protected function getFilters(): ?array
    {
        return [
            now()->year => now()->year,
            now()->subYear()->year => now()->subYear()->year,
            now()->subYears(2)->year => now()->subYears(2)->year,
        ];
    }

    protected function getData(): array
    {
        $year = $this->filter ?? now()->year;

        $data = Article::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', $year)
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        $monthlyData = [];

        for ($i = 1; $i <= 12; $i++) {
            $monthlyData[] = $data[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => "Articles in {$year}",
                    'data' => $monthlyData,
                    'borderColor' => 'oklch(0.439 0 0)',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
