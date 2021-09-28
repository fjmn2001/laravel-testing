<?php

declare(strict_types=1);

namespace App\Helpers;

final class Email
{
    public static function validate(string $email): bool
    {
        return (bool)filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
