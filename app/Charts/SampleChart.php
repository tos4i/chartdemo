<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\SampleChartData;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $xAxis=array();
        $yAxis=array();

        $dataXY=SampleChartData::all('xAxis','yAxis')->take(-$request->span);
        foreach ( $dataXY as $tmpArray) {
            $xAxis[]=$tmpArray['xAxis'];
            $yAxis[]=$tmpArray['yAxis'];

        }

        return Chartisan::build()
            ->labels($xAxis)
            ->dataset('Sample Data Chart', $yAxis);
    }
}
