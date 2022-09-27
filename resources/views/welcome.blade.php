
@extends('plantilla')

@section('title', 'Potato')

@section('content')

    <h1>Welcome to my app</h1>

    {{route("create")}}

    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
        Display value
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
        Display value
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
        Display value
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
        Display value
      </label>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <strong>Hola</strong>  ESTE ES MI ALERT
    </div>
@endsection

@section('script')
    <script>
        $(".alert").alert();
    </script>
@endsection