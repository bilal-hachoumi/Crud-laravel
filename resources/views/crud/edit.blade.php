


@extends('layout.master')
@section('crud')
    Crud
@endsection

@section('main')
<form style="width:60%;margin-top:150px ;margin-left:360px ;" action={{route('Crud.update',$crud)}} method="POST" width='50%'> 
  @csrf
  @method('put')
  <div class="mb-3" >
    <label for="exampleInputText" class="form-label">Name:</label>
    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" name="name" value={{old('name',$crud->name)}}>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value={{old('email',$crud->email)}}>
  </div>
  <div class="mb-3 ">
    <label class="exampleInputText" class="form-label">City:</label>
    <input type="text" class="form-control" id="examplInputText" name="city" value={{old('city',$crud->city)}}>
  
  </div>
  <button type="submit" class="btn btn-primary">Modifer</button>
</form>

@endsection