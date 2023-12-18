<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Throwable;

class Login extends Controller
{
    protected $request_url;
    protected $device_details;
    protected $ip_address;
    protected $referer_url;
    private $role_url;

    public function __construct(Request $request)
    {
        $this->request_url = $request->segment(2);
        $this->device_details = $this->_device();
        $this->ip_address = $request->ip();
        $this->referer_url = collect(explode('/', parse_url($request->header('referer'), PHP_URL_PATH)))->last();

        $this->role_url = [
            1 => 'mis',
            2 => 'admin',
            3 => 'system-admin',
        ];
    }

    public function index()
    {
        return match($this->request_url){
            'admin'        => view('auth.0002'),
            'system-admin' => view('auth.0003'),
            default => view('auth.0001'),
        };
    }

    protected function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('username','password'))){
            $user = Auth::user();
            if($user->is_active){
                if($account_role = $user->account_role){
                    $roles = json_decode($account_role->roles,true);
                    $role_id = array_reduce($roles, function ($carry, $data) {
                        if ($data['default'] == 1) {return $data['role'];}
                    });
                    $this->_throttle($this->ip_address,'login_throttle','clear');
                    $this->_throwResponse('Login Success',200,'success',$this->role_url[$role_id]);
                }
                Auth::logout();
                $this->_throttle($this->ip_address,'login_throttle','hit');
                $this->_throwResponse('Login Failed, Contact MIS for Assistance',429,'error',csrf_token());
            }
            Auth::logout();
            $this->_throttle($this->ip_address,'login_throttle','hit');
            $this->_throwResponse('Login Failed, Account is Deactivated',401,'error',csrf_token());
        }
        $this->_throttle($this->ip_address,'login_throttle','hit');
        $this->_throwResponse('Login Failed, Check your username or password.',401,'error',csrf_token());
    }

    protected function logout()
    {
        if(Auth::check()){
            $url = explode('/', $this->role_url[Auth::user()->role]);
            Auth::logout();
            return redirect($url[0]);
        }
    }
}
