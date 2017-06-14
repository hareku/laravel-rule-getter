<?php

namespace Hareku\LaravelRule;

use Illuminate\Contracts\Config\Repository as ConfigContract;

class ValidationRule implements ValidationRuleContract
{
    /**
     * The config repository.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * The config file name.
     *
     * @var string
     */
    protected $configFileName = 'validation-rules';

    /**
     * @return void
     */
    public function __construct(ConfigContract $config)
    {
        $this->config = $config;
    }

    /**
     * Get the specified rule.
     *
     * @param  string  $key
     * @return string|array
     *
     * @throws RuleNotFoundException
     */
    public function get(string $key)
    {
        if (! $this->has($key)) {
            throw new RuleNotFoundException($key);
        }

        return $this->getFromKey($key);
    }

    /**
     * Check if the rule exists.
     *
     * @param  string  $key
     * @return bool
     */
    protected function has(string $key): bool
    {
        return $this->config->has($this->makeConfigKey($key));
    }

    /**
     * Get a rule from config file.
     *
     * @param  string  $key
     * @return string
     */
    protected function getFromKey(string $key): string
    {
        return $this->config->get($this->makeConfigKey($key));
    }

    /**
     * Make a key for get from config.
     *
     * @param  string  $key
     * @return string
     */
    protected function makeConfigKey(string $key): string
    {
        return "{$this->configFileName}.{$key}";
    }
}
