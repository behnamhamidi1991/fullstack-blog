<?php

namespace App\Controllers;

class ErrorController {


    /**
     * 403 unauthorized error
     * 
     * @return void
     */
    public function unauthorized($message = 'You are not authorized to view this resource') {
        http_response_code(403);
        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);
    }
}