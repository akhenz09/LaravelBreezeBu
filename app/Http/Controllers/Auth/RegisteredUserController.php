<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        switch ($request->role) {
            case 'AMC Podclass':
                $user->assignRole('AMC Podclass', 'user');
                break;
            case 'Active Recall':
                $user->assignRole('Active Recall', 'user');
                break;
            case 'On the Go':
                $user->assignRole('On the Go', 'user');
                break;
            case 'Masterclass':
                $user->assignRole('Masterclass', 'user');
                break;
            case 'Powermock':
                $user->assignRole('Powermock', 'user');
                break;
            default:
                $user->assignRole('user');
                break;
            };

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    protected function registered(Request $request, $user)
    {
    // Set approval message in session
    session()->flash('approval_message', 'Your account has been created. It will be approved by an administrator before you can access the application.');

    return redirect($this->redirectPath());
    }
}
