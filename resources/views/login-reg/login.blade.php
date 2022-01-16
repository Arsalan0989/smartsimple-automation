@include('login-reg._incpre')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">{{ config('app.name', 'Laravel') }} Sign In</h1>
</div>
<form class="frmMain" action="{{ route('company.login.submit') }}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control form-control-user" name="email" id="exampleInputEmail"
            aria-describedby="emailHelp" placeholder="Enter Email Address...">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword"
            placeholder="Password">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
            <label class="custom-control-label" for="customCheck">Remember
                Me</label>
        </div>
    </div>
    <button class="btn btn-primary btn-user btn-block">
        Login
    </button>
</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('company.register') }}">Create an Account!</a>
</div>
@include('login-reg._incpost')
