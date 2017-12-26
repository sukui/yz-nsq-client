<?php

namespace ZanPHP\YZNsq\Contract;


interface Buffer
{
    public function write($bytes);

    public function read($len);

    public function readFull();

    public function reset();
}