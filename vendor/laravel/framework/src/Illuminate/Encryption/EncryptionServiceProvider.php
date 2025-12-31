<?php

namespace Illuminate\Encryption;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Opis\Closure\SerializableClosure;
use RuntimeException;

class EncryptionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerEncrypter();
        $this->registerOpisSecurityKey();
    }

    /**
     * Register the encrypter.
     *
     * @return void
     */
    protected function registerEncrypter()
    {
        $this->app->singleton('encrypter', function ($app) {
            $key = config('app.key');
            $cipher = config('app.cipher');

            return new Encrypter($this->parseKey($key), $cipher);
        });
    }

    /**
     * Configure Opis Closure signing for security.
     *
     * @return void
     */
    protected function registerOpisSecurityKey()
    {
        $key = config('app.key');

        if (! class_exists(SerializableClosure::class) || empty($key)) {
            return;
        }

        SerializableClosure::setSecretKey($this->parseKey($key));
    }

    /**
     * Parse the encryption key.
     *
     * @param  string  $key
     * @return string
     */
    protected function parseKey($key)
    {
        if (Str::startsWith($key = $this->key($key), $prefix = 'base64:')) {
            $key = base64_decode(Str::after($key, $prefix));
        }

        return $key;
    }

    /**
     * Extract the encryption key from the given configuration.
     *
     * @param  string  $key
     * @return string
     *
     * @throws \RuntimeException
     */
    protected function key($key)
    {
        return tap($key, function ($key) {
            if (empty($key)) {
                throw new RuntimeException(
                    'No application encryption key has been specified.'
                );
            }
        });
    }
}
