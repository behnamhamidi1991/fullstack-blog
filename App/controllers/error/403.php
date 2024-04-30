<?php

namespace App\Controllers;

class ErrorController {


    /**
     * 403 unauthorized error
     * 
     * @return void
     */
    public function unauthorized($message = 'You are not authorized to view this resource') {
        http_response_code(404);
        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);
    }
}