<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('user.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    // $request->validate([
    //     'name' => ['required', 'string', 'max:255'],
    //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
    // ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(route('dashboard', absolute: false));
    // }

    public function store(RegistrationRequest $request)
    {
        $validated_data = $request->validated();

        try {
            $user = User::create([
                'name' => $validated_data['name'],
                'email' => $validated_data['email'],
                'password' => Hash::make($validated_data['password']),
            ]);

            event(new Registered($user));

            Auth::login($user);

            return to_route('profile.edit');
        } catch (\Throwable $th) {

            return back()->with('error', 'Server Error! Try Again');

            // return json_response(success: false, message: "Registration Failed!", status: 500, errors: $th->getMessage());
        }
    }
}
