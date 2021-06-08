<?php
    $api_key_file   = file( "./.env" );
    $baseID         = trim( $api_key_file[ 0 ] );
    $apiKey         = trim( $api_key_file[ 1 ] );
    $targetTable    = trim( $api_key_file[ 2 ] );

    $API_URL        = getBaseAPIURL($baseID , $targetTable);
    $post_params    = [
        "fields" => [
            "Notes" => $_POST[ 'memo' ],
        ]
    ];

    $curl = curl_init();
    curl_setopt( $curl  , CURLOPT_URL               , $API_URL );
    curl_setopt( $curl  , CURLOPT_POST              , true );
    curl_setopt( $curl  , CURLOPT_CUSTOMREQUEST     , 'POST' );
    curl_setopt( $curl  , CURLOPT_SSL_VERIFYPEER    , false );
    curl_setopt( $curl  , CURLOPT_RETURNTRANSFER    , true );
    curl_setopt( $curl  , CURLOPT_HTTPHEADER        , getHeader($apiKey) );

    curl_setopt( $curl  , CURLOPT_POSTFIELDS    , json_encode( $post_params ) );

    $response   = curl_exec( $curl );
    $response   = json_decode( $response , true );
    curl_close( $curl );

    header( "Location: comp.php" );

    function getHeader($apiKey)
    {
        return [
            'Authorization: Bearer ' . $apiKey ,
            'Content-Type: application/json',
        ];
    }
    function getBaseAPIURL($baseID , $targetTable)
    {
        return implode( "/" , [
            "https://api.airtable.com/v0" ,
            $baseID ,
            $targetTable ,
        ]);
    }
