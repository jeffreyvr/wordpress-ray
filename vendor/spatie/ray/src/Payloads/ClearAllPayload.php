<?php

namespace Spatie\WordPressRay\Spatie\Ray\Payloads;

class ClearAllPayload extends Payload
{
    public function getType(): string
    {
        return 'clear_all';
    }
}
