<?php

use Faker\Factory;

if (! function_exists('faker')) {
    /**
     * Get a Faker\Generator instance.
     *
     * @param string|null $locale
     * @return \Faker\Generator
     */
    function faker(?string $locale = null): \Faker\Generator
    {
        $locale = $locale ?? config('app.faker_locale', 'en_US');

        return Factory::create($locale);
    }
}
