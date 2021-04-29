<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
<!--INICIO del cont principal-->
<div class="container" style="background-color: #fff;">
    <div class="container text-right">
        <div class="row">
            <div class="col-lg-12">

                @livewire('modulos.create')

            </div>
        </div>
    </div>
    <br>
    <div class="container">
            <!-- <div class="col-lg-12"> -->
                <!-- <div class="table-responsive"> -->
                    @livewire('modulos.index')
                <!-- </div> -->
            <!-- </div> -->

    </div>


</div>
<script>
    Swal.fire(
  'Bienvenido',
  'Da click en ok para continuar',
  'success'
)
$("#btnNuevos").click(function(){
    $('#img').remove();
    // $("#formModules").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Modulo");
    $("#modalMODULES").modal("show");
    id=null;
    opcion = 1; //alta
});
window.livewire.on('#modulosave', () => {
            $('#modal').modal('hide');
        });

</script>
</x-app-layout>
