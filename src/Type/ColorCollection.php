<?php

namespace ZiffMedia\Looker\Type;

class ColorCollection
{
    public readonly string $id;

    public string $label;

    public array $categoricalPalettes;

    public array $sequentialPalettes;

    public array $divergingPalettes;
}
