<?php
class ApiRepository
{
    public function makeRequest()
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
        $parameters = [
            'start' => '1',
            'limit' => '14',
            'convert' => 'USD'
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 1fb35cb2-ae58-412d-80a9-52d860a5a3ab'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL


        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $request,
                // set the request URL
                CURLOPT_HTTPHEADER => $headers,
                // set the headers
                CURLOPT_RETURNTRANSFER => 1 // ask for raw response instead of bool
            )
        );

        $response = curl_exec($curl); // Send the request, save the response

        curl_close($curl);
        return json_decode($response);
    }
    public function getObjectById($id)
    {

        $url = 'https://pro-api.coinmarketcap.com/v2/cryptocurrency/quotes/latest';
        $parameters = [
            'id' => $id,
            'convert' => 'USD'
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 1fb35cb2-ae58-412d-80a9-52d860a5a3ab'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL


        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $request,
                // set the request URL
                CURLOPT_HTTPHEADER => $headers,
                // set the headers
                CURLOPT_RETURNTRANSFER => 1 // ask for raw response instead of bool
            )
        );

        $response = curl_exec($curl); // Send the request, save the response

        curl_close($curl);
        return json_decode($response);
    }
    public function getMetadataById($id)
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/info';
        $parameters = [
            'id' => $id,
        ];

        $headers = [
            'Accepts: application/json',
            'X-CMC_PRO_API_KEY: 1fb35cb2-ae58-412d-80a9-52d860a5a3ab'
        ];
        $qs = http_build_query($parameters); // query string encode the parameters
        $request = "{$url}?{$qs}"; // create the request URL


        $curl = curl_init(); // Get cURL resource
        // Set cURL options
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $request,
                // set the request URL
                CURLOPT_HTTPHEADER => $headers,
                // set the headers
                CURLOPT_RETURNTRANSFER => 1 // ask for raw response instead of bool
            )
        );
        $response = curl_exec($curl); // Send the request, save the response

        curl_close($curl);
        return json_decode($response);
    }
}