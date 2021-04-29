<div>
    <?php
    //  echo "<pre>";
    //     print_r($data);die;
    //     echo "</pre>";
    ?>
    @if (count($data) > 0)
                           @php
                           $z = 0;
                           $contador = 0;

                           $registros = ceil(count($data)/4);
                           @endphp
                             @for ($i=0; $i < $registros ; $i++)
                            <div class="row">
                            <!-- <tr> -->
                                 @for ($q=0; $q < 4; $q++)
                                 @php

                                 $ruta = "/login_crud/dashboard/";
                                 @endphp

                                @if (isset($data[$z]))
                                    <div class="col-sm-4 text-center" >
                                        <div class="col-md-6 text-center">
                                            <a id="list" href="{{$data[$z]['ruta_modulo']}} ">
                                                <!-- <div style="background-color: white; " class="panel-heading-icon mt-sm"> -->
                                        <img src="https://empresas.blogthinkbig.com/wp-content/uploads/2019/11/Imagen3-245003649.jpg?w=800" class="rounded-circle" alt="Cinque Terre" width="170" height="170">
                                            </a>
                                        </div>
                                        <div class="col-md-6 text-center" >
                                            <a style="color:#777!important;" id="list"
                                            href="@php $data[$z]['ruta_modulo']; @endphp">
                                            <h3 class="text-weight-semibold mt-none text-center" id="des">
                                            {{$data[$z]['descripcion_modulo']}}
                                            </h3>
                                        </a>
                                        </div>
                                        <div class="col-md-6 text-center" >
                                            <button class='btn btn-primary btnEditar1'><i class='fas fa-edit'></i></button>
                                            <button class='btn btn-danger btnBorrar1' wire:click="destroy{{$data[$z]['id']}}"><i class='fas fa-trash-alt'></i></button>
                                        </div>
                                    </div>
                                    <br>
                                @else
                                <div></div>
                                @endif
                                @php
                                $z++;
                                $contador++;

                                @endphp
                             @endfor
                            </div>
                            <br>
                                @endfor
    @else

    <h1 class="text-center">No hay modulos creados </h1>

                    @endif
</div>
