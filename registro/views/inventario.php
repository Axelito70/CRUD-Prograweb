<div class="container mt-5">
    <div class="row justify-content-center bg-card">
        <div class="col-10 text-center mt-3">
            <h2>Lista de productos</h2>
        </div>
        <div class="col-10 text-end mt-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarModal">
                Añadir producto
            </button>
            <table id="myTable" class="display table text-white">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">cantidad</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="contenido_producto">
                </tbody>
            </table>
        </div>
        <div class="col-10 text-end">
            <hr class="text-primary">
            <p class="lead">By: Axelito</p>
        </div>
    </div>
</div>

<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" hidden id="id_producto_act"> 
                        <div class="form-floating mb-3">
                            <input class="form-control" id="edit_producto" name="edit_producto" type="text" placeholder="Producto">
                            <label class="text-primary" for="edit_producto"><i class="fa-solid fa-box me-2"></i>Producto</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="edit_precio" name="edit_precio" type="text" placeholder="Precio">
                            <label class="text-primary" for="edit_precio"><i class="fa-solid fa-dollar-sign me-2"></i>Precio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="edit_cantidad" name="edit_cantidad" type="text" placeholder="cantidad">
                            <label class="text-primary" for="edit_cantidad"><i class="fa-solid fa-cubes me-2"></i>cantidad</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btn_actualizar">Actualizar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="producto" name="producto" type="text" placeholder="Producto">
                            <label class="text-primary" for="producto"><i class="fa-solid fa-box me-2"></i>Producto</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="precio" name="precio" type="text" placeholder="Precio">
                            <label class="text-primary" for="precio"><i class="fa-solid fa-dollar-sign me-2"></i>Precio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="cantidad" name="cantidad" type="text" placeholder="cantidad"> <!-- ID cambiado a 'cantidad' -->
                            <label class="text-primary" for="cantidad"><i class="fa-solid fa-cubes me-2"></i>cantidad</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btn_agregar">Añadir</button>
            </div>
        </div>
    </div>
</div>