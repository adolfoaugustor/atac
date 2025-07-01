<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    /**
     * A tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'contacts'; // Certifique-se de que o nome da tabela está correto

    /**
     * Os atributos que são atribuíveis em massa.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'celular',
        'assunto',
        'mensagem',
        'ip_address', // Novo campo para rastrear IPs
        'user_agent'  // Novo campo para rastrear User-Agent
    ];

    /**
     * Indica se o modelo deve ser timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Método para sanitizar dados antes de salvar
     *
     * @param array $data
     * @return array
     */
    public static function sanitizeData(array $data): array
    {
        return [
            'nome' => strip_tags(trim($data['nome'] ?? '')),
            'email' => filter_var(trim($data['email'] ?? ''), FILTER_SANITIZE_EMAIL),
            'celular' => preg_replace('/[^0-9]/', '', $data['celular'] ?? ''),
            'assunto' => strip_tags(trim($data['assunto'] ?? 'Contato via site')),
            'mensagem' => strip_tags(trim($data['mensagem'] ?? '')),
            'ip_address' => $data['ip_address'] ?? null,
            'user_agent' => $data['user_agent'] ?? null,
        ];
    }

    /**
     * Verifica se um endereço IP está bloqueado devido a muitas tentativas
     *
     * @param string $ip
     * @return bool
     */
    public static function isIpBlocked(string $ip): bool
    {
        // Verifica se há mais de 10 tentativas nas últimas 24 horas
        $count = self::where('ip_address', $ip)
                    ->where('created_at', '>=', now()->subDay())
                    ->count();

        return $count > 10;
    }

    /**
     * Verifica se um email está bloqueado devido a muitas tentativas
     *
     * @param string $email
     * @return bool
     */
    public static function isEmailBlocked(string $email): bool
    {
        // Verifica se há mais de 5 tentativas nas últimas 24 horas
        $count = self::where('email', $email)
                    ->where('created_at', '>=', now()->subDay())
                    ->count();

        return $count > 5;
    }
}
