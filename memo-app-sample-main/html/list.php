
<?php
    $api_key_file   = file( "./.env" );
    $baseID         = trim( $api_key_file[ 0 ] );
    $apiKey         = trim( $api_key_file[ 1 ] );
    $targetTable    = trim( $api_key_file[ 2 ] );

    $API_URL        = getBaseAPIURL($baseID , $targetTable);

    $curl = curl_init();
    curl_setopt( $curl  , CURLOPT_URL               , $API_URL );
    curl_setopt( $curl  , CURLOPT_CUSTOMREQUEST     , 'GET' );
    curl_setopt( $curl  , CURLOPT_SSL_VERIFYPEER    , false );
    curl_setopt( $curl  , CURLOPT_RETURNTRANSFER    , true );
    curl_setopt( $curl  , CURLOPT_HTTPHEADER        , getHeader($apiKey) );

    $response   = curl_exec( $curl );
    $response   = json_decode( $response , true );
    curl_close( $curl );
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>memo-app</title>
  </head>
  <body>
    <h1>メモアプリ</h1>
    <h2>一覧</h2>
    <ul><?php foreach( $response[ 'records' ] as $record ) { ?>
      <li><?php echo nl2br($record[ 'fields' ][ 'Notes' ]); ?></li><?php } ?>
      
    </ul>
  </body>
</html>
<?php
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