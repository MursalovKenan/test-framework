<?php

namespace Aigletter\App\Controllers;

class CoinFlipController
{
    /**
     * @throws \Exception
     */
    public function flip()
    {
        $flipSide = random_int(0, 1);
        if ($flipSide) {
            echo 'Орел';
            return;
        }
        echo 'Режка';
        return;
    }
}