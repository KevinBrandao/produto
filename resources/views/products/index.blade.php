<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="produtos">
    <h1>Produtos</h1>
    <a href="/create">Criar produto</a>

    <ul>
        @foreach ($products as $item)
            <li>
                <a href="/show/{{ $item->id }}">
                    Nome e Valor do produto: {{ $item->name }} ___${{ $item->price }}
                </a>
            </li>
        @endforeach
    </ul>
    </div>
</body>
</html>