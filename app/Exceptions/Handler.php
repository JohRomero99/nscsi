<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Log;
// use Exception;
// use Illuminate\Auth\AuthenticationException;
// use App\Exceptions\InvalidOrderException;

class Handler extends ExceptionHandler
{    
    
    public function report(Throwable $exception)
    {
        if ($exception instanceof \Flight\Exception\FlightBookingErrorException) {
            // custom code
        }

        parent::report($exception);
    }
    
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        // $this->reportable(function (Throwable $e) {
      
        // });

        $this->reportable(function (InvalidOrderException $e) {
            //
        })->stop();

    }

}
