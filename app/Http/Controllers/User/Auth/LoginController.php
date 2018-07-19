<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Services\ShoppingCartService;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $shoppingCardService;

    /**
     * LoginController constructor.
     * @param ShoppingCartService $shoppingCardService
     */
    public function __construct(
        ShoppingCartService $shoppingCardService
    )
    {
        $this->shoppingCardService = $shoppingCardService;
        $this->middleware('guest:users')->except('logout');
    }

    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|min:4'
        ]);

        try {
            $token = JWTAuth::attempt($request->only('email', 'password'), [
                'exp' => Carbon::now()->addWeek()->timestamp,
            ]);
        } catch (JWTException $e) {
            return response()->json([
                'error' => 'Could not authenticate',
            ], 500);
        }

        if (!$token) {
            return response()->json([
                'error' => 'Could not authenticate',
            ], 401);
        } else {

            return app('apiResponse')->response(['token' => $token]);
        }

//        // Attempt to log the user in
//        if (Auth::guard('users')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
//            $this->shoppingCardService->clear();
//            // if successful, then redirect to their intended location
//            return redirect()->intended(route('user.dashboard'));
//        }
//
//        // if unsuccessful, then redirect back to the login with the form data
//        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        $logoutResult = JWTAuth::invalidate(JWTAuth::getToken());
        return app('apiResponse')->response($logoutResult, $logoutResult ? 'success logout' : 'failed logout');
    }
}
