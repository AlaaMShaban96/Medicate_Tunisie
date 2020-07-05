@extends('cpanel/partials/master')
@section('head')

<title> CPanel | Doctor</title>

@endsection
@section('body')

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titel</th>
        
       
      </tr>
    </thead>
    <tbody>
      
        @foreach ($companyServices as $service)
      
            <tr >
            <th scope="row" >{{$service->id}}</th>
              <td >{{$service->titel_ar}}</td>
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