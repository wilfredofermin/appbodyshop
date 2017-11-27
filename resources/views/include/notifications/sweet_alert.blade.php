<script>
    window.onload = function () {
        document.querySelector('#salir').addEventListener('click', salir)
    }

    function salir () {

        swal({
            title: 'Saliendo de BSCONTROL',
            text: "Esta seguro de cerrar la aplicacion ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#9C27B0',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, por favor !',
            confirmButtonClass: 'btn btn-raised btn-success',
            cancelButtonClass: 'btn btn-raised btn-danger',
        }).then(function () {
            onclick=event.preventDefault();
            document.getElementById('logout-form').submit();
            swal(
                    'BSCONTROL...Saliendo!',
                    'HAZTA LUEGO.. {{Auth::user()->name}} !!' ,
                    'success'
            )
        })
    }

</script>

