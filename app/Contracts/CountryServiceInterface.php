<?php

namespace App\Contracts;

interface CountryServiceInterface
{
    /**
     * Fetch country details by its name.
     *
     * @param string $name
     * @param bool $fullText Whether to search for countries containing the name or exact match.
     * @return array
     */
    public function fetchByName(string $name, bool $fullText = false): array;

    /**
     * Fetch country details by its alpha code.
     *
     * @param string $code
     * @return array
     */
    public function fetchByCode(string $code): array;

    /**
     * Fetch countries that use a specific currency.
     *
     * @param string $currency
     * @return array
     */
    public function fetchByCurrency(string $currency): array;

    /**
     * Fetch countries where a specific language is spoken.
     *
     * @param string $language
     * @return array
     */
    public function fetchByLanguage(string $language): array;

    /**
     * Fetch countries based on their region.
     *
     * @param string $region
     * @return array
     */
    public function fetchByRegion(string $region): array;

    /**
     * Fetch countries based on their subregion.
     *
     * @param string $subregion
     * @return array
     */
    public function fetchBySubregion(string $subregion): array;

    /**
     * Fetch countries based on a range of population.
     *
     * @param int $min
     * @param int $max
     * @return array
     */
    public function fetchByPopulationRange(int $min, int $max): array;
}
