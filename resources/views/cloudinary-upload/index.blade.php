@extends('master')
@section('content')
    <div class="card">
       <div class="card-body">
           <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
               @csrf
               <input type="file" name="file" id="file">
               <button type="submit">Upload File</button>
           </form>
       </div>
    </div>
@endsection
