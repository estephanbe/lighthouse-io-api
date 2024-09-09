<?php

namespace App\Services;

use App\Models\StaticValue;
use Illuminate\Database\Eloquent\Collection;

class StaticValuesService
{
    public function getStaticValuesByLocale(string $locale)
    {
        $static_values = StaticValue::all()->translate($locale, 'en');

        $static_values_collection = new Collection();
        $static_values->each(function ($static_value) use ($static_values_collection) {
          if ($static_value->value) {
            $static_values_collection->put($static_value->key, $static_value->value);
          } else {
            $static_values_collection->put($static_value->key, $static_value->image);
          }
        });

        return $static_values_collection;
    }
}
