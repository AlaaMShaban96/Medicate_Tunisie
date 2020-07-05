@extends('cpanel/partials/master')
@section('head')

<title> CPanel | Doctor</title>

@endsection
@section('body')

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
      
        @foreach ($diags as $diags)
      
            <tr >
            <th scope="row" >{{$diags->id}}</th>
              <td >{{$diags->name}}</td>
              <td ><span>{{$diags->phoneNo }}</span></td>
              <td >{{$diags->email }}</td>
              <td >{{$diags->address }}</td>
              <td >{{$diags->area }}</td>
              <td >{{$diags->city }}</td>
     
             
             
              <td>
              <a href" class="btn btn-success" > 
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
@endsection
@section('script')

    
@endsection