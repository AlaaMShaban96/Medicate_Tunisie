@extends('cpanel/partials/master')
@section('head')


<title> CPanel | Edit News</title>
@endsection
@section('body')
<form action="{{url('/cpanel/news-edit/'.$news->id.'/update')}}" method="post">
@csrf


    <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Titel </th>
        <th scope="col">Discrption</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  value="{{$news->titel_ar}}" name="titel_ar">
            </td>
            <td>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description_ar">{{$news->description_ar}}</textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  value="{{$news->titel_en}}" name="titel_en">
            </td>
            <td>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description_en">{{$news->description_en}}</textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  value="{{$news->titel_fr}}" name="titel_fr">
            </td>
            <td>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description_fr" >{{$news->description_fr}}</textarea>
            </td>
        </tr>
    </tbody>
  </table>
  <button class="btn btn-success" type="submit">Save</button>
</form>


@endsection
@section('script')

    
@endsection