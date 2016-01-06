@extends('admin.adminmaster')

@section('content')

<h2>{{$passports->Full_Name}}</h2>
<hr>
<p><b>Date of Birth:</b>{{$passports->Date_of_Birth}}</p>
<p><b>Passport Number:</b>{{$passports->Passport_Number}}</p>

  
@endsection
