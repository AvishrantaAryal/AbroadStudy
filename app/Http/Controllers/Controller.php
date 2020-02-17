<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Response;
use App\Study;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     public function apiSuccessResponse($data)
    {
	    return response([
	        'status' => Response::HTTP_OK,
	        'response_time' => microtime(true) - LARAVEL_START,
	        'results' => $data
	    ],Response::HTTP_OK);
 	}

	public function apiFailureResponce($messages)
	{
	   return response([
	    'status' => Response::HTTP_BAD_REQUEST,
	    'response_time' => microtime(true) - LARAVEL_START,
	    'message' => $messages,
	    'request' => request()->all()
		],Response::HTTP_BAD_REQUEST);
	}
   
}
