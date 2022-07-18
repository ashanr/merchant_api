<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Http\Traits\ResponseTrait;
use Illuminate\Support\Facades\DB;

/**
 * Class HelloController.
 *
 * @author Rakitha Dissanayake <rakithadd@gmail.com>
 */


class HelloController extends Controller
{
    use ResponseTrait; // Trait for http response
    /**
     * Responds with a status for heath check.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $result = [
            'api_status' => 'pass',
            'version' => '1.0',
            //'text'=> $mailRes,
            'message' => 'Welcome! You are good to go.',
            'mysql_status' => DB::connection() ? 'pass' : 'fail',
            'timestamp' => Carbon::now(),
            'server' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]" . '/#/payment-view/',
        ];

        return $this->dataResponse($result);
    }

    /** Test email sender */
    public function testEmailSender()
    {
        $details = [
            'email_body'    => ['email' => 'menukaslim@gmail.com'],
            'subject'       => 'TEST EMAIL FROM SLII',
            'email'         => 'menukaslim@gmail.com',
            'type'          => 'TEST'
        ];

        //dispatch(new \App\Jobs\SendEmailJob($details, $details))->onQueue("low"); 
        return $this->successResponse('Email sent successfully!');
    }
}
