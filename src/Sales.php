<?php

namespace CherryAudio\Sales;

use Laravel\Nova\Card;

class Sales extends Card
{
    public $width = 'full';

    public function total()
    {
        return $this->withMeta([
            'total' => '$150.00'
        ]);
    }

    public function component()
    {
        return 'sales';
    }
}
