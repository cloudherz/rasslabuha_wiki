<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class InfoController
{
    public function update(Request $request)
    {
        $user = $request->R_USER ?? null;

        if (!$user) {
            throw ValidationException::withMessages([
                'auth' => 'Вы не авторизованы.',
            ]);
        }

        $validated = $request->validate([
            'nickname' => 'required|string|min:2|max:256',
            'status'   => 'nullable|string|max:1024',
        ], [
            'nickname.required' => 'Никнейм не может быть пустым',
            'nickname.min'      => 'Никнейм должен быть не короче 2 символов',
            'nickname.max'      => 'Никнейм не должен быть длиннее 256 символов',
            'status.max'        => 'Статус не должен быть длиннее 1024 символов',
        ]);

        $user->nickname = $validated['nickname'];
        $user->status = $validated['status'] ?? '';
        $user->save();

        return redirect()->route('account')->with('success', 'Профиль успешно обновлен!');
    }
}
