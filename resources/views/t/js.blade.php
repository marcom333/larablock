@extends('plantilla')

@section('content')
    <label for="text">
        <input type="text" name="texto" id="texto">
    </label>

    <div class="btn btn-success" onclick="do_something()">
        Enviar
    </div>

    <div class="d-none" id="finish">
        <div class="alert alert-success" role="alert">
            <strong>success</strong> Ya se guardo.
        </div>
    </div>
    <div class="d-none" id="bad">
        <div class="alert alert-danger" role="alert">
            <strong>danger</strong> No funciono.
        </div>
    </div>
@endsection

@section('script')
    <script>
        function do_something(){
            dato = $("#texto").val();
            sendData(dato);
        }

        function sendData(block){
            //_token = "{{csrf_token()}}";
            //$("input[name='_token']").val(); si usas @csrf




            
            $.ajax({
                method: "POST",
                url: "{{url('/transaction/create')}}",
                data: { texto: block/*, _token */}
            })
            .done(function() {
                $("#finish").removeClass("d-none");
            })
            .fail(function() {
                $("#bad").removeClass("d-none");
            });
        }
    </script>
@endsection