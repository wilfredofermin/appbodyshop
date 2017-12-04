<script>

    @if(Session::has('message'))
                 var type = "{{ Session::get('alert-type') }}";
      switch(type){

        case 'vencida':
        $.notify({
            title: "<strong>Informacion de solicitud</strong> ",
            message: "Tiene solicitud vencida"
        });

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
