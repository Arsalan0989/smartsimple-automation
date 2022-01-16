<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class FrontController extends Controller
{
    protected function guard()
    {
        return Auth::guard();
    }
    protected function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'mobile_country_code' => ['required', 'string', 'max:10'],
            'mobile' => ['required', 'string', 'min:10', 'max:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'company_name' => ['required', 'string', 'max:255'],
        ]);
    }
    protected function loginValidator(Request $request)
    {
        return Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function index()
    {
        return redirect(route('company.login'));
    }

    public function companyRegister(Request $request)
    {
        return view('login-reg.register');
    }

    public function companyLogin(Request $request)
    {
        return view('login-reg.login');
    }

    public function companyLoginSubmit(Request $request)
    {
        $output = [
            'status' => false,
            'info' => 'Invalid Attempt',
        ];
        $validation = $this->loginValidator($request);
        $errorMessage = '';
        if($validation->fails()) {
            $errors = $validation->errors()->toArray();
            foreach($errors as $errorArr) {
                foreach($errorArr as $error) {
                    $errorMessage.= $error . '<br>';
                }
            }
            $output = [
                'status' => false,
                'info' => $errorMessage,
            ];
        } else {
            $auth = false;
            $msg = 'Invalid credentials!';
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $request->has('remember'))) {
                $auth = true; // Success
                $msg = 'Login successful';
            }
            $output = [
                'status' => $auth,
                'info' => $msg,
                'nexturl' => route('home')
            ];
        }
        
        return response()->json($output);
    }

    public function companyRegisterSubmit(Request $request)
    {
        $output = [
            'status' => false,
            'info' => 'Invalid Attempt',
        ];
        $validation = $this->validator($request);
        if($validation->fails()) {
            $errorMessage = '';
            $errors = $validation->errors()->toArray();
            foreach($errors as $errorArr) {
                foreach($errorArr as $error) {
                    $errorMessage.= $error . '<br>';
                }
            }
            $output = [
                'status' => false,
                'info' => $errorMessage,
            ];
        } else {
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'mobile_country_code' => $request->mobile_country_code,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
                'superadmin' => NO,
                'saas_user' => YES,
                'company' => YES,
                'company_staff' => YES,
                'client_id' => NO,
            ]);
            $company = new Company();
            $company->user_id = $user->id;
            $company->name = $request->company_name;
            $company->logo = NO;
            $company->about = NO;
            $company->services = NO;
            $company->save();

            $user->company_id = $company->id;
            $user->save();
            $output = [
                'status' => true,
                'info' => 'Company Register Successful!',
                'nexturl' => route('company.login')
            ];
        }
        return response()->json($output);
    }
}
