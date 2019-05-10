
@extends('westsoft.acl.layouts.acl')

@section('title', 'ACL Home')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content-header')

@endsection

@section('content-body')

<div class="content-header-left col-md-12 col-12 mb-2">

    <div style="background: url('acl/images/avatar.png') no-repeat center center; min-height: 500px; width:100%"></div>

</div>

@endsection

@section('js')  
    <script src="{{ asset('js/jquery.dynatable.js') }}"></script>  
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> 
@endsection
