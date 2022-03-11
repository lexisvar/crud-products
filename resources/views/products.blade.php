@include('partials/head')
  <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
      <div class="container">
        <div class="row">
          <h1>Productos</h1>
        </div> 
        <div class="row">
          <div class="col-4">
            <a href="products/new" type="button" class="btn btn-primary">Crear Producto</a>
          </div>
        </div>
        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Sku</th>
                <th scope="col">Stock</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>                  
                  <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->name }}</td>
                  <td>{{ $product->sku }}</td>
                  <td>{{ $product->stock }}</td>
                  <td>
                    <a href="/products/edit/{{ $product->id }}" type="button" class="btn btn-success">Editar</a>
                    <a href="/products/delete/{{ $product->id }}" type="button" class="btn btn-danger">Eliminar</a>
                  </td>
                </tr>
              @endforeach                
            </tbody>
          </table>
        </div>            
      </div>            
    </div>
  </body>
</html>
