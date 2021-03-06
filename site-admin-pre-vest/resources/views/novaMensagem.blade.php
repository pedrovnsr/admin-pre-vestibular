<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Nome do Curso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1 align="center">Enviar Mensagem</h1>
    <form method="POST" action="{{url('/mensagem/nova')}}">
      @csrf
      <div class="container pt-3">
	<div class="row">
          <div class="col">
            <label for="remetente" class="col-form-label text-md-right">Seu Nome</label>
            <input id="remetente" type="text" class="form-control @error('remetente') is-invalid @enderror" name="remetente" value="{{old('remetente')}}" required autofocus/>
            @error('remetente')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
            @enderror
          </div>
          <div class="col">
            <label for="email" class="col-form-label text-md-right">Seu E-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autofocus/>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
            @enderror
          </div>
        </div>
	<div class="row">
          <div class="col">
            <label for="conteudo" class="col-form-label text-md-right">Mensagem</label><br>
            <textarea id="conteudo" name="conteudo" rows="8" cols="60"></textarea>
            @error('conteudo')
            <span class="invalid-feedback" role="alert">
              <strong>{{$message}}</strong>
            </span>
            @enderror
          </div>
        </div>
        <br>
        <input type="submit" value="Enviar"/>
      </div>
    </form>
  </body>
</html>
