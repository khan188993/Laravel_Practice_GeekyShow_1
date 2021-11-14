@extends('layout.adminlayout')
{{-- single string pass in layout --}}
@section('title','Contact Section')

{{-- @section('contact')
    <h1>Contact Section :</h1>
@endsection --}}


{{-- section pass in layout --}}
@section('content')
<h1>Contact Section :</h1>
@endsection

{{-- override section Default --}}
@section('d-section')
    @parent 
    <h2>D section override by contact Blade<h2/>
@endsection




