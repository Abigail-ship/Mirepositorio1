<table border="1">
    <tx>
        <td colspan="2" style="text-align: center;"> <img src="{{ asset('PAGINAIMAGEN/maestros.jpg') }}" alt='ADMI' width="200" height="150">
        </td>
    </tx>
    <tx> 
        <td>

            <ul>
                <li><a href="/abigail">INICIO</a></li>
                <li><a href="/alumnos">Alumnos</a></li>
                <li><a href="/maestros">Maestros</a></li>
                <li><a href="/administrativos">Administrativos</a></li>
            </ul>
        </td>
        <td>
            Esta es la lista de los maestros del plantel
        </td>
    </tx>
</table>

<html>
   <head>
    <x-app-layout>
        <title>Este es mi componente</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
        <style>
            .titulo{ font-family: 'Cookie';font-weight: 50px; }
        </style>
   </head>
   <body>
        <h1 class= "titulo">COMUNIDAD EDUCATIVA</h1>

   </body>
    </x-app-layout>
</html>