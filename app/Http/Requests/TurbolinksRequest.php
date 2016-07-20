<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurbolinksRequest extends FormRequest
{
    public function response(array $errors)
    {
        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
