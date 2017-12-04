
@if (Session::has('bienvenido'))
    <script>
        $.notify({
            icon: 'img/'+'{{Auth::user()->avatar}}',
            title: 'Hola, <strong>{{Auth::user()->name}}</strong>',
            message: 'BSCONTROL Le da la bienvenida'
        },{
            type: 'minimalist',
            delay: 5000,
            icon_type: 'image',
            template: '<div data-notify="container" class="col-md-10 col-md-3 alert alert-{0}" role="alert">' +
            '<img data-notify="icon" class="img-circle pull-left" width="64">' +
            '<span data-notify="title">{1}</span>' +
            '<span data-notify="message">{2}</span>' +
            '</div>'
        });
    </script>

@endif
