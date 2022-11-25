<?php

namespace App\Exports;

use App\Models\Libreta;
use App\Models\LibretaParcial;
use Maatwebsite\Excel\Concerns\FromCollection;

class LibretaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    private $collection;

    public function __construct($arrays)
    {
        $output = [];
        // get headers for current dataset
        $output[] = array_keys($arrays[0]);
        
        foreach ($arrays as $array) {
            
            // store values for each row
            $output[] = array_values($array);
        }

        $this->collection = collect($output);
    }
    public function collection()
    {
        return $this->collection;
    }
}
