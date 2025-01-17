<?php

declare(strict_types=1);

namespace Staatic\WordPress\Setting\Advanced;

use Staatic\WordPress\Setting\AbstractSetting;
use Staatic\WordPress\Setting\ReadsFromEnvInterface;
use Staatic\WordPress\Setting\ReadsFromEnvTrait;
use Staatic\WordPress\Setting\StoresEncryptedInterface;

final class HttpAuthenticationPasswordSetting extends AbstractSetting implements StoresEncryptedInterface, ReadsFromEnvInterface
{
    use ReadsFromEnvTrait;

    public function name(): string
    {
        return 'staatic_http_auth_password';
    }

    public function type(): string
    {
        return self::TYPE_STRING;
    }

    protected function template(): string
    {
        return 'password';
    }

    public function label(): string
    {
        return __('Password', 'staatic');
    }

    /**
     * @param mixed[] $attributes
     */
    public function render($attributes = []): void
    {
        parent::render(array_merge([
            'disableAutocomplete' => \true
        ], $attributes));
    }

    public function envName(): string
    {
        return 'STAATIC_HTTP_AUTH_PASSWORD';
    }
}
