<?php

namespace App\Http\Controllers\Auth;

use App\Models\RUser;
use App\Models\RSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController
{
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string|min:2|max:256',
            'password' => 'required|string|min:1|max:1024',
        ], [
            'login.required' => 'Этот бро решил зайти с пустым логином',
            'login.string'   => 'Бро, логин это строка',
            'login.min'      => 'Бро, логин не короче двух символов',
            'login.max'      => 'Бро, логин не длиннее 256 символов',

            'password.required' => 'Этот бро решил зайти с пустым паролем',
            'password.string'   => 'Бро, пароль это строка',
            'password.min'      => 'Бро, пароль не короче одного символа',
            'password.max'      => 'Бро, пароль не длиннее 1024 символов',
        ]);

        $user = RUser::where('login', $request->login)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'login' => 'Не знаю такого юзера, сори',
            ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'login' => 'Пароль не подходит, ОТКАЗАНО',
            ]);
        }

        $token = Str::random(128);

        $session = RSession::create([
            'r_user_id' => $user->r_user_id,
            'token' => $token,
            'ip' => $request->ip(),
            'agent' => $request->userAgent(),
            'creation_date' => time(),
            'expiration_date' => time() + (365 * 24 * 60 * 60),
        ]);

        $cookie = cookie(
            'r_auth',
            $user->r_user_id . '|' . $token,
            525600,
            null,
            null,
            false,
            true
        );

        return redirect()->route('account')->withCookie($cookie);
    }

    public function logout(Request $request)
    {
        $cookieValue = $request->cookie('r_auth');

        if ($cookieValue && str_contains($cookieValue, '|')) {
            [$userId, $token] = explode('|', $cookieValue, 2);

            RSession::where('r_user_id', $userId)
                ->where('token', $token)
                ->delete();
        }

        return redirect()->route('login')->withCookie(cookie()->forget('r_auth'));
    }
}
