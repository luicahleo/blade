<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>


{{-- esta linea supone si tuvieramos un valor desde la base de datos, luego lo asignamos al componente con :color="$color este es la varible de php" --}}
@php
    $color = "red";
@endphp



<body>
    <div
        class=" py-4 sm:pt-0">
        <!-- component -->
        <div >
            <x-alert :color="$color" class="mb-4">

                {{--slot con nombre--}}

                <x-slot name="title">
                    Titulo 1
                </x-slot>

                {{-- esto es lo que se mostrara en slot --}}
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius culpa consectetur, possimus hic provident
                accusantium consequatur nesciunt cum, eos unde alias reiciendis laudantium voluptate distinctio ullam
                vel! Esse, quas dicta?




            </x-alert>


            {{-- aqui usamos un componente sin el atributo color, por eso hemos definido en la clase en el constructor --}}
            <x-alert>

                {{--slot con nombre--}}

                <x-slot name="title">
                    Titulo 2
                </x-slot>

                {{-- esto es lo que se mostrara en slot --}}
                Prueba de texto



                
            </x-alert>
        </div>
    </div>
</body>

</html>