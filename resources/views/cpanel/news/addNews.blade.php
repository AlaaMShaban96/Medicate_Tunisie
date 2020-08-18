@extends('cpanel/partials/master')
@section('head')

<title> CPanel | Add </title>
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

<form action="{{url('/cpanel/news/store')}}" method="post" enctype="multipart/form-data">
    @csrf
    {{-- @method('') --}}
    
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
                    <input type="text" style="direction: rtl;" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Titel Arbic"  name="titel_ar">
                    @error('titel_ar')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea style="direction: rtl;" id="summernote1" class="form-control" id="editor" rows="5" placeholder="Description Arbic" name="description_ar"></textarea>
                    @error('description_ar')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="Titel English"  name="titel_en">
                    @error('titel_en')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <textarea id="summernote2" class="form-control" id="editor" rows="5" placeholder="Description English" name="description_en"></textarea>
                    @error('description_en')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Titel Franch"  name="titel_fr">
                    @error('titel_fr')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
                <td>
                    <div class="form-group">
                        
                        <textarea id="summernote3" class="form-control" id="editor" rows="5" placeholder="Description Franch" name="description_fr"></textarea>
                    </div> 
                    @error('description_fr')
                        <small class="input-error">{{ $message }}</small>
                    @enderror
                </td>
            </tr>
        </tbody>
      </table>
      <input type="file" name="image" id="" placeholder="uploade img">

      <button class="btn btn-success" type="submit">Save</button>
      <a href="{{url('/cpanel/news/cancel')}}" class="btn btn-danger" > 
        cancel
        </a>
    </form>
    
    
@endsection
@section('script')

<script src="{{asset('assets/cpanel/vendor/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('assets/cpanel/js/initiate-summernote.js')}}"></script>

@endsection