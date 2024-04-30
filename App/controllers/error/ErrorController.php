<?php

namespace App\Controllers;

class ErrorController {


    /**
     * 404 not found error
     * 
     * @return void
     */
    public function notFound($message = 'Resource not found') {
        http_response_code(404);
        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }
}