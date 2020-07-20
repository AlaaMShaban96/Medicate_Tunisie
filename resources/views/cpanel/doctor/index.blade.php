@extends('cpanel/partials/master')
{{-- @section('titel')
CPanel | Doctor
@endsection --}}
@section('head')

<title> CPanel | Doctor</title>

@endsection
@section('body')
<div class="content">
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">name</th>
        <th scope="col">phone number</th>
        <th scope="col">email</th>
        <th scope="col">address</th>
        <th scope="col">area</th>
        <th scope="col">city</th>
       
      </tr>
    </thead>
    <tbody>
      
        @foreach ($doctors as $doctor)
      
            <tr >
            <th scope="row" >{{$doctor->id}}</th>
              <td >{{$doctor->name}}</td>
              <td ><span>{{$doctor->phoneNo }}</span></td>
              <td >{{$doctor->email }}</td>
              <td >{{$doctor->address }}</td>
              <td >{{$doctor->area }}</td>
              <td >{{$doctor->city }}</td>
     
             
             
              <td>
              <a href="" class="btn btn-success" > 
                Approval
                <i class="far fa-eye"></i>

              </a>

              </td>
              <td>
              
              <td>
                <button type="button" class="btn btn-danger"  data-toggle="modal"  data-target="#delete_Child-id">
                  Delete
                  <i class="fas fa-cloud-download-alt"></i>

                </button>
              </td>
            </tr>
     
          @endforeach
     
      
    </tbody>
  </table>
</div>
@endsection
@section('script')

    
@endsection