<div>
    <button id="btnNuevos" type="button" class="btn btn-success"  data-toggle="modal"><i class="fas fa-plus-circle" aria-hidden="true"></i></button>

    <!--Modal para CRUD-->
       <div wire:ignore class="modal fade" id="modalMODULES" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title " id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formModules">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="descripcion_modulo" style="text-transform: capitalize !important;" class="col-form-label">Nombre del modulo:</label>
                            <input type="cel"   class="form-control" id="descripcion_modulo" wire:model.defer="descripcion_modulo">
                            @error('descripcion_modulo') <span class="error">{{ 'error' }}</span> @enderror
                        </div>

                        <div id="img" class="form-group">
                        </div>
                        <!-- <div class="form-group">

                            <label for="img_modulo" class="col-form-label">Imagen:</label>
                            <input type="file"  class="form-control" id="img_modulo" name="img_modulo"
                                accept="image/gif,image/jpeg,image/jpg,image/png">
                        </div>  -->
                        <div class="form-group">
                            <label for="ruta_modulo" class="col-form-label">Ruta:</label>
                            <input type="text" class="form-control" id="ruta_modulo" wire:model.defer="ruta_modulo">
                            @error('ruta_modulo') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button  id="modulosave" class="btn btn-dark" wire:click.prevent="save">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

