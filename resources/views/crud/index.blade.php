

    



    



@extends('layout.master')
@section('crud')
    Crud
@endsection

@section('maine')
<a class="btn btn-primary"  href={{route('Crud.create')}}>Ajoute</a>

<table   border="1" class="table-bordered" style="width:80%; margin:auto; ">
    <thead>
      <tr >
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">city</th>
        <th scope="col ">Action</th>
      </tr>
    </thead>
    @foreach ($cruds as $crud)
    <tbody>
      <tr>
        
        <td>{{$crud->id}}</td>
        <td>{{$crud->name}}</td>
        <td>{{$crud->email}}</td>
        <td>{{$crud->city}}</td>
        <td class="col d-flex gap-2" >
            <form action="{{ route('Crud.destroy', $crud->id) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
    
            <form action="{{ route('Crud.edit', $crud->id) }}" method="get">
                @csrf
                <button type="submit" class="btn btn-primary">modifer</button>
            </form>
        </td>
        
      </tr>
    
     
    </tbody>
    @endforeach
  </table>

  @endsection
