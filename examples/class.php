<?php

class Phone {
    private ?float $height = null;
    private ?float $width = null;

    public function __construct(
        private int $version,
        private string $manufacturer,
        float $height,
        float $width,
    ) {
        $this->height = $height;
        $this->width = $width;
    }

    public function getSize(): ?string
    {
        if (!$this->height && !$this->width) {
            return null;
        }
        return 'H: ' . $this->height . ', W: ' . $this->width;
    }
}

$iphone = new Phone(11, 'Apple', 144, 71.4);
$android = new Phone(22, 'Samsung');

echo $iphone->getSize();
