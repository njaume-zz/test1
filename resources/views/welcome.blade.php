@extends('master')

@section('content')

    <head>
        <title>Laravel</title>
        
        <style>
            body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                
                padding-top: 2cm;
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                {{Auth::user()->id}}<br>
                {{Auth::user()->name}}<br>
                {{Auth::user()->email}}<br>
                {{Auth::user()->password}}<br>
            </div>
        </div>
    </body>
@endsection