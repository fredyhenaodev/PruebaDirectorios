@extends('admin.partials.app')

@section('htmlheader_title')
 Admin Dashboard
@endsection

@section('content')
 @include('admin.content.'.$id)
@endsection
