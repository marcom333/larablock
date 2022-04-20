
@csrf

<div class="form-group">
  <label for="">Nombre</label>
  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{old("name",$user->name)}}">
</div>

@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
  <label for="">Correo</label>
  <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{old("email", $user->email)}}">
</div>

@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="form-group">
  <label for="">Contraseña</label>
  <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
</div>

@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<button type="submit" class="btn btn-primary">Guardar</button>