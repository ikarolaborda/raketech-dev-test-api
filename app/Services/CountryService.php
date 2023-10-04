<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Contracts\CountryServiceInterface;

class CountryService implements CountryServiceInterface
{
    public function __construct(
        private readonly string $baseUri = 'https://restcountries.com/v3.1/'
    ) {}

    public function fetchByName(string $name, bool $fullText = false): array
    {
        $response = Http::get("{$this->baseUri}name/{$name}" . ($fullText ? '?fullText=true' : ''));
        return $response->json();
    }

    public function fetchByCode(string $code): array
    {
        $response = Http::get("{$this->baseUri}alpha/{$code}");
        return $response->json();
    }

    public function fetchByCurrency(string $currency): array
    {
        $response = Http::get("{$this->baseUri}currency/{$currency}");
        return $response->json();
    }

    public function fetchByLanguage(string $language): array
    {
        $response = Http::get("{$this->baseUri}lang/{$language}");
        return $response->json();
    }

    public function fetchByRegion(string $region): array
    {
        $response = Http::get("{$this->baseUri}region/{$region}");
        return $response->json();
    }

    public function fetchBySubregion(string $subregion): array
    {
        $response = Http::get("{$this->baseUri}subregion/{$subregion}");
        return $response->json();
    }

    public function fetchByPopulationRange(int $min, int $max): array
    {
        $allCountries = Http::get("{$this->baseUri}all")->json();

        return array_filter($allCountries, function ($country) use ($min, $max) {
            return $country['population'] >= $min && $country['population'] <= $max;
        });
    }
}

