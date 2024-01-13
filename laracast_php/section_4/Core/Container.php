<?php

namespace Core;

class Container
{
    protected $bindings = [];

    public function bind($key, $resolver): void
    {
        $this->bindings[$key] = $resolver;
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \RuntimeException("No matching binding found for {$key}");
        }
        $resolver = $this->bindings[$key];
        return $resolver();
    }
}
