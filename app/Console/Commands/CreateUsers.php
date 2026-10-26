<?php

namespace App\Console\Commands;

use App\Models\RUser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUsers extends Command
{
    protected $signature = 'users:create {logins* : Список логинов через пробел}';

    protected $description = 'Создает пользователей с паролями';

    public function handle(): int
    {
        $logins = $this->argument('logins');

        sort($logins, SORT_NATURAL | SORT_FLAG_CASE);

        $created = [];
        $errors = [];

        $now = time();

        foreach ($logins as $login) {
            $login = trim($login);

            if ($login === '') {
                continue;
            }

            if (RUser::where('login', $login)->exists()) {
                $errors[] = "Логин '$login' уже существует";
                continue;
            }

            $plainPassword = $this->generatePassword(64);

            $user = RUser::create([
                'login'      => $login,
                'password'   => Hash::make($plainPassword),
                'role'       => 'writer',
                'nickname'   => $login,
                'avatar'     => 'none',
                'status'     => 'Это писец',
                'join_date'  => $now,
            ]);

            $created[] = [
                'id'       => $user->r_user_id,
                'login'    => $login,
                'password' => $plainPassword,
            ];
        }

        if (!empty($created)) {
            $this->info('Создано пользователей: ' . count($created));
            $this->table(
                ['ID', 'Login', 'Password (plain)'],
                $created
            );
            $this->warn('Сохрани пароли!!!');
        }

        if (!empty($errors)) {
            $this->error('Проблемы:');
            foreach ($errors as $e) {
                $this->line(' - ' . $e);
            }
        }

        return self::SUCCESS;
    }

    private function generatePassword(int $length): string
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $max = strlen($chars) - 1;
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $chars[random_int(0, $max)];
        }

        return $password;
    }
}
