<?php

trait sampleTrait {
    abstract public function sample(string $string): string;
}

class sampleClass {
    use sampleTrait;

    public function sample(int $string): string
    {
        // TODO: Implement sample() method.
    }
}

