@extends('cpanel/partials/master')
@section('head')

<title> CPanel | C Service</title>

@endsection
@section('body')
<a href="{{url('/cpanel/compane-service/add')}}" class="btn btn-success" > 
  Add Service 
 </a>
<table class="table table-dark">
    <thead>
      <tr>
        {{-- <th scope="col">Id</th> --}}
        <th scope="col">Titel Arbic</th>
        <th scope="col">Titel Englsh</th>
        <th scope="col">Titel France</th>
        
       
      </tr>
    </thead>
    <tbody>
      
        @foreach ($companyServices as $service)
      
            <tr>
            {{-- <th scope="row" >{{$service->id}}</th> --}}
              <td >{{$service->titel_ar}}</td>
              <td >{{$service->titel_en}}</td>
              <td >{{$service->titel_fr}}</td>
              <td>
              <a href="{{url('/cpanel/compane-service/'.$service->id .'/edit')}}" class="btn btn-success" > 
                Edit
             

              </a>

              </td>
              <td>
              
              <td>

              <form action="{{url('/cpanel/compane-service/'.$service->id)}}" method="post">
                @method('delete')
                @csrf
                  <button type="submit" class="btn btn-danger"  data-toggle="modal"  data-target="#delete_Child-id">
                    Delete
                    

                  </button>
              
              </form>
              
                
              </td>
            </tr>
     
          @endforeach
     
      
    </tbody>
  </table>
@endsection
@section('script')

    
@endsection