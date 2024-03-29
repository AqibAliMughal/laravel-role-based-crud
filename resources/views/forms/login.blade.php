
@section('page-content')
{{ session('msg') }}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <!-- Login Form -->
                    <form id="loginForm" action="{{route('login')}}" method="POST">
                        @csrf
                        <!-- This method will be used when this form also be used for Update-->
                        {{-- @method('PUT')  --}}
                        
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <a href=""></a>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-secondary" onclick="location.href='signup.html';">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('layouts.main')
