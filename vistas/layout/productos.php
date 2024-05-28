<div class="content-wrapper">
    <div class="container-header">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="fa fa-address-book" aria-hidden="true"> Modulo de Registrar Productos</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                        style="background-color: #343a40;" data-target="#ModalAgregarProductos" >
                        <i class="fa fa-address-book" aria-hidden="true"> Agregar Productos</i>
                        
                    </button>

                </div>
                <!-- /.card-body -->

            </div>

        </div>
        <!-- /.col-md-6 -->

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- Modal Agregar Usuarios -->
<!-- Modal Agregar Usuarios -->
<div class="modal fade" id="ModalAgregarProductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form method="post" role="form">

        <div class="modal-header">
          <h5 class="modal-title" id="ModalAgregarProductos">Formulario Agregar Productos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-list" aria-hidden="true"> Seleccionar Categoría</i>
                                    <select class="form-control" id="categoria" required>
                                        <option value="">Seleccionar Categoría</option>
                                        <option value="Articulos">Articulos</option>
                                        <option value="Tecnologias">Tecnologias</option>
                                        <option value="Pro. Domestico">Pro. Doméstico</option>
                                        <option value="Prod. Book">Prod. Book</option>
                                        <option value="Electrodomésticos">Electrodomésticos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-barcode" aria-hidden="true"> Código de Producto</i>
                                    <input type="text" class="form-control" id="codigo" placeholder="Ingresar código de producto" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-info-circle" aria-hidden="true"> Descripción del Producto</i>
                                    <input type="text" class="form-control" id="descripcion" placeholder="Ingresar descripción del producto" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-archive" aria-hidden="true"> Stock del Producto</i>
                                    <input type="number" class="form-control" id="stock" placeholder="Ingresar stock del producto" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-money" aria-hidden="true"> Precio de Compra</i>
                                    <input type="number" class="form-control" id="precio_compra" placeholder="Ingresar precio de compra" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-money" aria-hidden="true"> Precio de Venta</i>
                                    <input type="number" class="form-control" id="precio_venta" placeholder="Ingresar precio de venta" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-money" aria-hidden="true"> Precio Mayor</i>
                                    <input type="number" class="form-control" id="precio_mayor" placeholder="Ingresar precio mayor" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="panel">
                                        <input type="file" id="nuevaFoto" name="nuevaFoto">
                                        <p class="help-block">Peso máximo de la foto 2MB</p>
                                        <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">
                                    </div>
                                </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #343a40;">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>

      </form>




    </div>
  </div>
</div>