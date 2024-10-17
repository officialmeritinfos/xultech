<?php

if (!function_exists('getVisitorLocation')) {
    /**
     * Retrieves the location information of a visitor based on their IP address.
     *
     * This function uses the `stevebauman/location` package to obtain the visitor's location.
     * In production, it fetches the location based on the provided IP address. In non-production
     * environments, it defaults to using the server's IP address.
     *
     * @param string|null $ip The IP address of the visitor. If null, the server's IP will be used in non-production environments.
     * @return \Stevebauman\Location\Position|null An object containing the visitor's location information, or null if not found.
     */
    function getVisitorLocation(string $ip = null)
    {
        if (config('app.env') == 'production') {
            $location = \Stevebauman\Location\Facades\Location::get($ip);
        } else {
            $location = \Stevebauman\Location\Facades\Location::get();
        }

        return $location;
    }
}
if (!function_exists('ourProducts')) {
    /**
     * Retrieves a collection of active products from the "our_products" table.
     *
     * This function fetches all records from the `OurProduct` model where the status is set to 'active'.
     * It is useful for displaying only active products on the website or for any other business logic
     * that requires active products.
     *
     * @return \Illuminate\Database\Eloquent\Collection A collection of active `OurProduct` models.
     */
    function ourProducts(): \Illuminate\Database\Eloquent\Collection
    {
        return \App\Models\OurProduct::where('status','active')->get();
    }
}

if (!function_exists('convertToSlug')) {
    /**
     * Converts a given text string into a URL-friendly "slug."
     *
     * This function uses Laravel's `Str::slug` helper to transform the input text into a slug format
     * by replacing spaces and special characters with hyphens, and converting it to lowercase.
     * Slugs are useful for SEO-friendly URLs and are often used in URLs to represent titles or names.
     *
     * @param string $text The input text to be converted into a slug.
     * @return string A URL-friendly version of the input text.
     */
    function convertToSlug(string $text): string
    {
        return \Illuminate\Support\Str::slug($text);
    }
}
