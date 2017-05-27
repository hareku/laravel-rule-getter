<?php

use Hareku\LaravelRule\ValidationRuleContract as ValidationRule;

if (! function_exists('rule')) {
    /**
     * Get the specified validation rule or ValidationRule instance.
     *
     * @param  string  $key
     * @return string|array|ValidationRule
     * @throws \Hareku\LaravelRule\RuleNotFoundException
     */
    function rule(?string $key = null)
    {
        $rule = app(ValidationRule::class);

        if ($key) {
            return $rule->get($key);
        }

        return $rule;
    }
}
