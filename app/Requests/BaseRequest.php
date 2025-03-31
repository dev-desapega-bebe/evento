<?php

declare(strict_types=1);

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public array $rulesForm;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return $this->rulesForm;
    }
}
