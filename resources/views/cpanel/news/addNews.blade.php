@extends('cpanel/partials/master')
@section('head')

<title> CPanel | Add News</title>

@endsection
@section('body')

<form action="{{url('/cpanel/news-add/store')}}" method="post">
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
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Titel Arbic"  name="titel_ar">
                </td>
                <td>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description Arbic" name="description_ar"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"  placeholder="Titel English"  name="titel_en">
                </td>
                <td>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description English" name="description_en"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Titel Franch"  name="titel_fr">
                </td>
                <td>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Description Franch" name="description_fr" ></textarea>
                </td>
            </tr>
        </tbody>
      </table>
      <button class="btn btn-success" type="submit">Save</button>
    </form>
    
    
@endsection
@section('script')

    
@endsection