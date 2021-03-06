<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{route('cervejaria.index')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('cervejaria.cadastra')}}">Cadastro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<a href="{{route('cervejaria.index')}}">Minhas compras</a>
            </li>
         
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <h1> Editar produto " {{$Cerveja->nome}} "</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
@endif

<div >
    <form method="post" action="{{route('cervejaria.update', $Cerveja->id)}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="nome" class="col-sm-1 col-form-label">Nome: 
        </label><input class="col-sm-8 col-form-label" type="text" name="nome" id="nome" placeholder="nome" value="{{$Cerveja->nome}}"></p>
        <p>Tipo: <input class="col-sm-10 col-form-label" type="text" name="tipo" id="tipo" placeholder="tipo" value="{{$Cerveja->tipo}}"></p>
        <p>Imagem: <input class="col-sm-10 col-form-label" type="file" name="nomeImagem" id="nomeImagem" placeholder="nomeImagem" value=""></p>
        <p>Descricao: <input class="col-sm-10 col-form-label" type="text" name="descricao" id="descricao" placeholder="descricao" value="{{$Cerveja->descricao}}"></p>
        <p>Quantidade: <input class="col-sm-10 col-form-label" type="text" name="quantidade" id="quantidade" placeholder="quantidade" value="{{$Cerveja->quantidade}}"></p>
        <p>Pre??o: <input class="col-sm-10 col-form-label" type="text" name="preco" id="preco" placeholder="preco" value="{{$Cerveja->preco}}"></p>
        <p> <button type="submit" class="btn-warning">Atualizar</button>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>