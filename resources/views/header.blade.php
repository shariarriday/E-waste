<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use URL;
use DB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-waste Management</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{  URL::asset('/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{  URL::asset('/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{  URL::asset('/css/scrolling-nav.css') }}">
	<!-- Latest compiled and minified CSS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
  <script src="{{ URL::asset('/js/table_search.js') }}"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script
	<script src="{{  URL::asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{  URL::asset('/js/main.js') }}"></script>


</head>
