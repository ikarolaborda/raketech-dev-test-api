<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';

    protected $fillable = [
        'name_common',
        'name_official',
        'native_name',
        'tld',
        'cca2',
        'ccn3',
        'cca3',
        'independent',
        'status',
        'unMember',
        'currencies',
        'idd',
        'capital',
        'altSpellings',
        'region',
        'subregion',
        'languages',
        'translations',
        'latlng',
        'landlocked',
        'area',
        'demonyms',
        'flag',
        'maps',
        'population',
        'car',
        'timezones',
        'continents',
        'flags',
        'coatOfArms',
        'startOfWeek',
        'capitalInfo',
        'postalCode'
    ];

    // If you have nested objects or arrays in your JSON, you might want to cast them to appropriate data types
    protected $casts = [
        'native_name' => 'array',
        'tld' => 'array',
        'currencies' => 'array',
        'idd' => 'array',
        'capital' => 'array',
        'altSpellings' => 'array',
        'languages' => 'array',
        'translations' => 'array',
        'latlng' => 'array',
        'demonyms' => 'array',
        'maps' => 'array',
        'timezones' => 'array',
        'continents' => 'array',
        'flags' => 'array',
        'coatOfArms' => 'array',
        'capitalInfo' => 'array',
        'postalCode' => 'array'
    ];
}
