@include('login-reg._incpre')
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">{{ config('app.name', 'Laravel') }} Signup</h1>
</div>
<form class="frmMain" action="{{ route('company.register.submit')}}" method="post">
    @csrf
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" id="exampleFirstName"  name="firstname" placeholder="First Name">
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="exampleLastName" name="lastname" placeholder="Last Name">
        </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Email Address">
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                name="password" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" name="password_confirmation" class="form-control form-control-user" id="exampleRepeatPassword"
                placeholder="Repeat Password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" id="mobile_country_code"
                name="mobile_country_code" placeholder="Mobile Country Code e.g. (+1, +91 etc..)">
        </div>
        <div class="col-sm-6">
            <input type="number" name="mobile" class="form-control form-control-user" id="mobile"
                placeholder="Enter 10 digit mobile number">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" id="company_name"
                name="company_name" placeholder="Enter Company Name">
        </div>
    </div>
    <button class="btn btn-primary btn-user btn-block">
        Register Company
    </button>
    <hr>
</form>
<hr>
<div class="text-center">
    <a class="small" href="{{ route('company.login')}}">Already have an account? Login!</a>
</div>
@include('login-reg._incpost')
