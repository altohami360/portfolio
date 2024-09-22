<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorLocation;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $location = Location::get('176.44.126.83')->toArray();

        VisitorLocation::create([
            'ip' => $location['ip'],
            'driver' => $location['driver'],
            'country_name' => $location['countryName'],
            'currency_code' => $location['currencyCode'],
            'country_code' => $location['countryCode'],
            'region_code' => $location['regionCode'],
            'region_name' => $location['regionName'],
            'city_name' => $location['cityName'],
            'zip_code' => $location['zipCode'],
            'iso_code' => $location['isoCode'],
            'postal_code' => $location['postalCode'],
            'latitude' => $location['latitude'],
            'longitude' => $location['longitude'],
            'metro_code' => $location['metroCode'],
            'area_code' => $location['areaCode'],
            'timezone' => $location['timezone']
        ]);

        return view('main');
    }
}
