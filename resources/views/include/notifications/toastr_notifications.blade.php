<script>

    @if(Session::has('message'))
         var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'update':
            toastr["success"]("Su perfil ha sido actualizado exitosamente !", "{!! Auth::user()->name !!}",{positionClass: "toast-bottom-full-width"})
            break;
        case 'create_user':
            toastr["success"]("El usuario ha sido creado exitosamente !", "NUEVO USUARIO",{positionClass: "toast-bottom-full-width"})
            break;
        case 'create_puesto':
            toastr["success"]("El puesto ha sido creado exitosamente !", "NUEVO PUESTO",{positionClass: "toast-bottom-full-width"})
            break;
        case 'create_sucursal':
            toastr["success"]("La sucursal ha sido creada exitosamente !", "NUEVA SUCURSAL",{positionClass: "toast-bottom-full-width"})
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        case 'bienvenido':
            toastr["success"]("BSCONTROL le da la bienvenida !", "{!! Auth::user()->name !!}",{positionClass: "toast-bottom-center",progressBar:true})
            break;
        case 'create_solicitud':
            toastr["success"]("La solicitud ha sido creada exitosamente !", "SOLICITUD NUEVA",{positionClass: "toast-top-right"})
            break;
        case 'delete_solicitud':
            toastr["error"]("La solicitud ha sido eliminada exitosamente !", "SOLICITUD ELIMINADA",{positionClass: "toast-top-right"})
            break;
        case 'update_solicitud':
            toastr["info"]("La solicitud ha sido actualizada exitosamente !", "SOLICITUD ACTUALIZADA",{positionClass: "toast-top-right"})
            break;
    }
    @endif
</script>
