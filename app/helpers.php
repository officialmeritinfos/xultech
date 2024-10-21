<?php

use Google\Cloud\Storage\StorageClient;

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
if (!function_exists('latestFromBlog')) {
    function latestFromBlog(int $take = 5){
        return \App\Models\Post::where('status','published')->with('user')->latest()->take($take)->get();
    }
}
if (!function_exists('getUserById')) {
    function getUserById($id){
        return \App\Models\User::where('id',$id)->with('posts')->first();
    }
}
if (!function_exists('shortenText')) {
    function shortenText($text,$length=10): ?string
    {
        return \Illuminate\Support\Str::words($text,$length,'...');
    }
}
if (!function_exists('googleUpload')){
    /**
     * Upload a file to Google Cloud Storage.
     *
     * This function uploads a given file to Google Cloud Storage and returns the public URL
     * if the upload is successful. It uses the credentials stored in a JSON file and the
     * bucket name from the configuration. The file is uploaded to the 'profile-uploads'
     * directory in the bucket.
     *
     * @param \Illuminate\Http\UploadedFile $file The file to be uploaded.
     * @return array An associative array containing the status of the upload and the public URL if successful.
     */
    function googleUpload($file)
    {
        $user = Auth::user();

        //get the credentials in the json file
        $googleConfigFile = file_get_contents(private_path('xulfashion2.json'));
        //create a StorageClient object
        $storage = new StorageClient([
            'keyFile' => json_decode($googleConfigFile, true)
        ]);

        //get the bucket name from the env file
        $storageBucketName = config('googlecloud.storage_bucket');
        //pass in the bucket name
        $bucket = $storage->bucket($storageBucketName);
        $image_path = $file->getRealPath();
        //rename the file
        $fileName = time().'.'.$file->extension();

        //open the file using fopen
        $fileSource = fopen($image_path, 'r');
        //specify the path to the folder and sub-folder where needed
        $googleCloudStoragePath = 'profile-uploads/' . $fileName;

        //upload the new file to google cloud storage
        $request = $bucket->upload($fileSource, [
            'predefinedAcl' => 'publicRead',
            'name' => $googleCloudStoragePath
        ]);

        if ($request){
            return [
                'done'=>true,
                'link'=>'https://storage.googleapis.com/xulfashion/profile-uploads/'.$fileName
            ];
        }else{
            Log::info($request->json());
            return [
                'done'=>false,
            ];
        }
    }
}
if (!function_exists('private_path')) {
    /**
     * Get the path to the private folder.
     *
     * @param string $path Optional path to append to the private folder path.
     * @return string
     */
    function private_path($path = '')
    {
        return base_path('privateFolder' . ($path ? DIRECTORY_SEPARATOR . $path : ''));
    }
}

if (!function_exists('shorten_number')){
    /**
     * Formats a number into a short, human-readable string with a suffix (K, M, B, T).
     *
     * @param float|int $n The number to format.
     * @param int $precision The number of decimal places to include in the formatted number.
     * @return string The formatted number with an appropriate suffix.
     */
    function shorten_number($n, $precision = 1)
    {
        if ($n>0) {
            // Define suffixes and corresponding multipliers
            $suffixes = [
                12 => 'T',  // Trillion
                9 => 'B',  // Billion
                6 => 'M',  // Million
                3 => 'K',  // Thousand
                0 => ''    // No suffix
            ];

            // Determine the appropriate suffix and formatted number
            foreach ($suffixes as $power => $suffix) {
                if ($n >= pow(10, $power)) {
                    $n_format = number_format($n / pow(10, $power), $precision);
                    break;
                }
            }

            // Remove unnecessary zeroes after decimal
            if ($precision > 0) {
                $dotzero = '.' . str_repeat('0', $precision);
                $n_format = str_replace($dotzero, '', $n_format);
            }

            return $n_format . $suffix;
        }else{
            return  number_format($n, $precision);
        }
    }
}
