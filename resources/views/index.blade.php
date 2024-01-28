
@extends('layouts.main')

@section('page-content')
<div class="text-center">
    <a href="{{url('/signup')}}" class="btn btn-primary btn-lg mr-3">Sign up</a>
    <a href="{{url('/login')}}" class="btn btn-secondary btn-lg">Login</a>
    {{-- <a href="{{route('login')}}" class="btn btn-secondary btn-lg">Login</a> --}}
    
</div>
@endsection
