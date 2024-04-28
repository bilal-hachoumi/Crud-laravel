



@extends('layout.master')
@section('crud')
    Crud
@endsection

@section('mains')
<form style="width:60%;margin-top:150px ;margin-left:360px ;" action={{route('Crud.store')}} method="POST">
  @csrf
  <div class="mb-3" >
    <label for="exampleInputName" class="form-label">Name:</label>
    <input type="text"   class="form-control" id="exampleInputName" aria-describedby="namelHelp" name="name" value={{old('name')}}>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email:</label>
    <input type="email"  class="form-control" id="exampleInputEmail" name="email" value={{old('email')}}>
  </div>
  <div class="mb-3">
    <label class="form-check-label" for="from-label">City:</label>
    <input type="text"  class="form-control" id="exampleInputText" name="city" value={{old('city')}}>
    
  </div>
  <button type="submit" class="btn btn-primary">Ajoute</button>
</form>










