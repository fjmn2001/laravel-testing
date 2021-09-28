<?php

if (!function_exists('validate_email')) {
    function validate_email(string $email): bool
    {
        return \App\Helpers\Email::validate($email);
    }
}
