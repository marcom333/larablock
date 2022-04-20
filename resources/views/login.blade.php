@extends('plantilla')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="">User (email)</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          @error('error')
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error</strong> {{ $message }}
          </div>
          
          <script>
            $(".alert").alert();
          </script>
            
          @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection