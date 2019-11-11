<?php

namespace App\Mail;

class Inline
{
    public function __construct()
    {

    }

    public function svg($svgPath)
    {
        return 'data:image/svg+xml;base64, ' . base64_encode(file_get_contents(public_path() . '/images/' . $svgPath));
    }
}
