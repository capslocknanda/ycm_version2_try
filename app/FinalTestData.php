<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalTestData extends Model
{
    protected $fillable = [
        'Date', 'Furnace',
        'Material',
        'Primary Crystal',
      'Eutectic',
      'CE Value',
      'Wedge Value',
      'Melting Temp',
      'Molten Iron Temp',
      'iron',
      'carbon',
      'silicon',
      'Manganese',
      'phosphorus',
      'sulphur',
      'chromium',
      'molybdenum',
      'nickel',
      'copper',
      'titanium',
      'tin',
      'Aluminum',
      'magnesium',
      'vanadium',
      'Test wedge value',
      'Hardness inspection',
      'Hardness test',
      'Tensile strength'
    ];
}
