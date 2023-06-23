  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('inventario.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text"
              class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Marca</label>
            <input type="text"
              class="form-control" name="marca" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Talla</label>
            <input type="text"
              class="form-control" name="talla" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text"
              class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <input type="text"
              class="form-control" name="categoria" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text"
              class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text"
              class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>