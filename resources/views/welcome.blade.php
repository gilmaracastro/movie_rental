<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<!-- Style -->
		<link rel="stylesheet" href="{{ mix('css/app.css') }}">

		<style>
			body {
				background-color: #181816;
			}
			.form-control {
				border-color: inherit!important;
				-webkit-box-shadow: none!important;
				box-shadow: none!important;
			}
		</style>
    </head>
    <body>
        <div class="" id="app">
           
        </div>

        {{-- Load the application scripts --}}
        @if (app()->isLocal())
            <script src="{{ mix('js/app.js') }}"></script>
        @else
            <script src="{{ mix('js/manifest.js') }}"></script>
            <script src="{{ mix('js/vendor.js') }}"></script>
            <script src="{{ mix('js/app.js') }}"></script>
        @endif
    </body>
</html>
