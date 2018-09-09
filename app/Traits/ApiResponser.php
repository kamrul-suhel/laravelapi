<?php
/**
 * Created by PhpStorm.
 * User: kamrulahmed
 * Date: 09/09/2018
 * Time: 22:20
 */

namespace App\Traits;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponser{
    private function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    protected function showAll(Collection $collection, $code){
        return $this->successResponse(['data' => $collection], $code);
    }

    protected function showOne(Model $model, $code){
        return $this->successResponse(['data' => $model], $code);
    }
}
