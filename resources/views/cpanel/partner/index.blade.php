@extends('cpanel/partials/master')
@section('head')

<title> CPanel | News</title>

@endsection
@section('body')


<a href="{{url('/cpanel/partner/add')}}" class="btn btn-warning" > 
    add
    </a>
<table class="table ">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Photo</th> 
        <th ></th> 
        <th ></th> 
      </tr>
    </thead>
    <tbody>
      
        @foreach ($partners as $partner)
      
            <tr>
                <td  id="id{{$partner->id}}">{{$partner->id}}</td>
                <td>
                    <img style="width: 35%;height: 281px;" src="{{asset("$partner->img_path")}}" alt="" srcset="">
                </td>
                <td>
                    <a href="{{url("cpanel/partner/$partner->id/edit")}}" class="btn btn-warning" > 
                    Edit
                    </a>

              </td>
            
              <td>
                <form action="{{url('/cpanel/partner/'.$partner->id)}}" method="post">
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