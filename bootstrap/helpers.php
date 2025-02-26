<?php

function json_response(bool $success, string $message, mixed $errors = null, int $status = null)
{
    return response()->json([
        'success' => $success,
        'message' => $message,
        'errors' => $errors
    ], $status);
}
