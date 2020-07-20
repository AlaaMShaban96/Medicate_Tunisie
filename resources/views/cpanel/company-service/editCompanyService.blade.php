@extends('cpanel/partials/master')
@section('head')


<title> CPanel | Edit </title>
<link href="{{asset('assets/cpanel/vendor/summernote/summernote-bs4.css')}}" rel="stylesheet">
<link href="{{asset('assets/cpanel/css/master.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
<style>

    td{
        width: 33%;
    }
</style>
@endsection
@section('body')
<form action="{{url('/cpanel/compane-service/'.$service->id.'/update')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
        <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Titel </th>
            <th scope="col">Discrption</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input value="{{ $service->titel_ar}}" type="text" class="form-control" aria-label="Small" aria-describedby="input Group-sizing-sm" placeholder="Titel Arbic"  name="titel_ar">
                    @error('titel_ar')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea   id="summernote1" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description Arbic" name="descrption_ar"> {{$service->descrption_ar}}</textarea>
                    @error('descrption_ar')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea   id="summernote2" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Details Arbic" name="details_ar"> {{$service->details_ar}}</textarea>
                    @error('details_ar')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <input value="{{ $service->titel_en}}" type="text" class="form-control" aria-label="Small" aria-describedby="input Group-sizing-sm"  placeholder="Titel English"  name="titel_en">
                    @error('titel_en')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea   id="summernote3" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description English" name="descrption_en"> {{$service->descrption_en}}</textarea>
                    @error('descrption_en')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea   id="summernote4" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Details English" name="details_en"> {{$service->details_en}}</textarea>
                    @error('details_en')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <input value="{{ $service->titel_fr}}" type="text" class="form-control" aria-label="Small" aria-describedby="input Group-sizing-sm" placeholder="Titel Franch"  name="titel_fr">
                    @error('titel_fr')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea   id="summernote5" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description Franch" name="descrption_fr" > {{$service->descrption_fr}}</textarea>
                    @error('descrption_fr')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea   id="summernote6" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Details Franch" name="details_fr" > {{$service->details_fr}}</textarea>
                    @error('details_fr')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
        </tbody>
      </table>
      <input  type="file" name="image" id="" placeholder="uploade img">
      <button class="btn btn-success" type="submit">Update</button>
      <a href="{{url('/cpanel/company-service/cancel')}}" class="btn btn-danger" > 
        cancel
        </a>
    </form>
    

@endsection
@section('script')

<script src="{{asset('assets/cpanel/vendor/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/cpanel/js/initiate-summernote.js')}}"></script>

@endsection