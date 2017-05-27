<?php

namespace Hareku\LaravelRule;

use Exception;

class RuleNotFoundException extends Exception
{
    /**
     * Called the rule key.
     *
     * @var string
     */
    public $key;

    /**
     * Create a new exception instance.
     *
     * @param  string  $key
     * @return void
     */
    public function __construct(string $key)
    {
        parent::__construct('The specified rule does not exist.');

        $this->key = $key;
    }

    /**
     * Get the called rule key.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
}
