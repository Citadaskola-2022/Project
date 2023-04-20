<?php

namespace App\Core;

class Link {
    private bool $external = false;
    private bool $active = false;

    public function __construct(
        private string $name,
        private ?string $url,
    ) {}

    public function setExternal(): self
    {
        $this->external = true;
        return $this;
    }

    public function setActive(string $url): self
    {
        if ($this->url === $url) {
            $this->active = true;
        }

        return $this;
    }

    public function isExternal(): bool
    {
        return $this->external;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function getClasses(): string
    {
        if ($this->isActive()) {
            return 'bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium';
        }

        return 'text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium';
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

}