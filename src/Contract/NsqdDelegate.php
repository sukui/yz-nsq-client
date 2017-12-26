<?php

namespace ZanPHP\YZNsq\Contract;

use ZanPHP\YZNsq\Connection;

interface NsqdDelegate
{
    /**
     * onConnected is called when nsqd connects
     * @param Connection $conn
     * @return mixed
     */
    public function onConnect(Connection $conn);
}