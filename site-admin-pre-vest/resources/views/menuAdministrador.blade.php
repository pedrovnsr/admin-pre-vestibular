<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nome do Curso</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Nome do Curso
                </div>
                <div class="links">
                    <a href="{{ url('/') }}">Inicio</a>
                    <a href="{{ url('listar/administradores') }}">Listar Administradores</a>
                    <a href="{{ url('listar/alunos') }}">Listar Alunos</a>
                    <a href="{{ url('listar/professores') }}">Listar Professores</a>
                    <a href="{{ url('listar/turmas') }}">Listar Turmas</a>
                </div>
		<br>
                <div class="links">
                    <a href="{{ url('listar/apostilas') }}">Listar Apostilas</a>
                    <a href="{{ url('listar/mensagens') }}">Listar Mensagens</a>
                    <a href="{{ url('/cadastrar/apostila') }}">Adicionar Apostila</a>
                    <a href="{{ url('/cadastrar/turma') }}">Adicionar Turma</a>
                </div>
		<br>
                <div class="links">
                    <a href="{{ url('/cadastrar/administrador') }}">Cadastrar Administrador</a>
                    <a href="{{ url('/mensagem/nova') }}">Enviar Mensagem</a>
                </div>
            </div>
        </div>
    </body>
</html>
