<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('frontend.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:20', 'regex:/^[A-Za-z\s]+$/'],
            'last_name' => ['required', 'string', 'max:20', 'regex:/^[A-Za-z\s]+$/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['numeric', 'regex:/^(?:\+\d{1,4})?\d{6,}$/'],
            'referral_code' => ['nullable', 'string', 'min:10', 'exists:users,own_referral_code'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms_condition' => ['required']
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'referral_code' => $request->referral_code,
            'parent_id' => ($request->referral_code != null) ? getUserByParentReferralCode($request->referral_code) : null,
            'own_referral_code' => self::getOwnReferralCode(),
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    /**
     * Generate a unique ReferralCode for user
    */
    public static function getOwnReferralCode(): string
    {
        $ownReferralCode = 'R' . Carbon::now()->format('his') . rand(1000, 9999);

        if (User::where('own_referral_code', $ownReferralCode)->exists()) {
            $ownReferralCode = 'R' . Carbon::now()->format('his') . rand(1000, 9999);
        }
        return $ownReferralCode;
    }

}
