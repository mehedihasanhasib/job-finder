<?php

function json_response(bool $success, string $message, mixed $errors = null, int $status = 200, mixed $view = null)
{
    return response()->json([
        'success' => $success,
        'message' => $message,
        'view' => $view,
        'errors' => $errors
    ], $status);
}
