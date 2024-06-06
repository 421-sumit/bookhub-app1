<?php

namespace App\Components;

interface SearchQueryInterface
{
    public function query();
    public function prepareCollection($data);
}