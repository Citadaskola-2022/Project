<?php

declare(strict_types=1);

namespace App;

class Driver
{
    public ?Licence $licence = null;

    public function getLicence(): ?Licence
    {
        return $this->licence;
    }
}