@extends('cpanel/partials/master')
@section('head')

<title> CPanel | News</title>
<style>
    img{
  max-width:180px;
}


</style>
@endsection
@section('body')


<form action="{{url("/cpanel/partner/$partner->id/update")}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Photo</th> 
            <th scope="col">width</th> 
        </tr>
        </thead>
        <tbody>
        
        
        
                <tr>
                <td>
                    <input type="file" name="logo" id="" onchange="readURL(this);">
                </td>
                <td>
                    <input type="number" name="width" value="{{$partner->width}}" id="">         
                </td>
                <td>
                    <img id="blah" src="{{asset("$partner->img_path")}}" alt="your image" />         
                </td>
                
            
                </tr>
        
        
        
        
        </tbody>
    </table>

    <button class="btn btn-success" type="submit">Update</button>
  <a href="{{url('/cpanel/news/cancel')}}" class="btn btn-danger" > 
    cancel
    </a>
</form>
@endsection
@section('script')
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
 </script>   
@endsection