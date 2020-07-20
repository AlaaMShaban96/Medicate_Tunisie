@extends('cpanel/partials/master')
@section('head')

<title> CPanel | News</title>

@endsection
@section('body')
<a href="{{url('/cpanel/news/add')}}" class="btn btn-success" > 
  Add News 
  

</a>

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Titel Arbic</th>
        <th scope="col">Titel English</th>
        <th scope="col">Titel Farnch</th>
       
      </tr>
    </thead>
    <tbody>
      
        @foreach ($news as $oneNews)
      
            <tr id="row{{$oneNews->id}}">
            <th scope="row" id="id{{$oneNews->id}}">{{$oneNews->id}}</th>
              <td id="name{{$oneNews->id}}">{{$oneNews->titel_ar}}</td>
              <td id="date_of_birth{{$oneNews->id}}"><span>{{$oneNews->titel_en }}</span></td>
              <td id="home_adress{{$oneNews->id}}">{{$oneNews->titel_fr }}</td>
     
             
             
              <td>
              <a href="/cpanel/news/{{$oneNews->id}}/edit" class="btn btn-warning" > 
                Edit
                

              </a>

              </td>
              <td>
              <a href="/cpanel/news/{{$oneNews->id}}" class="btn btn-primary" > 
               Show
              

              </a>

              </td>
              <td>
                <form action="{{url('/cpanel/news/'.$oneNews->id)}}" method="post">
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
  {{-- {{$news->links()}} --}}


@endsection
@section('script')

    
@endsection