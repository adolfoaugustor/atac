<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SanitizeInput
{
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();

        array_walk_recursive($input, function(&$value) {
            if (is_string($value)) {
                // Remove caracteres nulos
                $value = str_replace(chr(0), '', $value);
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SanitizeInput
{
    public function handle(Request $request, Closure $next)
    {
        $input = $request->all();

        array_walk_recursive($input, function(&$value) {
            if (is_string($value)) {
                // Remove caracteres nulos
                $value = str_replace(chr(0), '', $value);

                // Remove caracteres de controle
                $value = preg_replace('/[\x00-\x1F\x7F]/u', '', $value);

                // Trim espaços
                $value = trim($value);
            }
        });

        $request->merge($input);

        return $next($request);
    }
}
                // Remove caracteres de controle
                $value = preg_replace('/[\x00-\x1F\x7F]/u', '', $value);

                // Trim espaços
                $value = trim($value);
            }
        });

        $request->merge($input);

        return $next($request);
    }
}
