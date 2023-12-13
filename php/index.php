<?php
$request = $_SERVER['REQUEST_URI'];
$request = current( explode( '?', $request ) );

if ( str_ends_with( $request, '/' ) && $request != '/' )
{
    $request = '/' . str_replace( '/', '', $request );
    exit();
}

header( 'Content-Type: application/json' );
header( 'Access-Control-Allow-Origin: *' );
header( 'Access-Control-Allow-Methods: POST, GET, PATCH, DELETE, OPTIONS' );
header( 'Access-Control-Max-Age: 86400' );

$result     = new stdClass();
$result->ok = true;

echo json_encode( $result );
