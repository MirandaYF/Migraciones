<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
</head>
<body>
    <h1>Detalles del Cliente: {{ $cliente->nombre }} {{ $cliente->apellido }}</h1>
    <p>Detalle: {{ $cliente->detalle }}</p>

    <h2>Facturas del Cliente</h2>
    <ul>
        @foreach ($facturas as $factura)
            <li><a href="{{ route('facturas.show', $factura->id) }}">Factura {{ $factura->id }}</a></li>
        @endforeach
    </ul>
</body>
</html>
