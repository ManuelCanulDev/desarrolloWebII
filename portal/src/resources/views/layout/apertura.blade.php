<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php if(empty($nombre)){ echo 'Gran Kanan'; }else{ echo $nombre; } ?></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/stylesheet.css') }}" />
</head>

<body>