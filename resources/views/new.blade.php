@include('partials/head')
  <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
      <div class="container">  
        <div class="row">
          <h1>Guardar Producto</h1>
        </div>      
        <div class="row">
          <form action="{{url('products/new')}}" method="post">
            <div class="form-row">
              <input type="hidden" class="form-control" id="name" name="id" value="{{ $id }}">
              <div class="form-group col-md-6">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ $name }}">
              </div>
              <div class="form-group col-md-6">
                <label for="description">Descripición</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descripición" rows="3" >{{ $description }}</textarea> 
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="sku">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" placeholder="Sku" value="{{ $sku }}">
              </div>
              
              <div class="form-group col-md-2">
                <label for="Stock">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" value="{{ $stock }}">
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="/products" type="button" class="btn btn-secondary">Volver</a>
            @csrf
          </form>
        </div>            
      </div>            
    </div>
  </body>
</html>