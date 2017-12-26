<?php

namespace ZanPHP\YZNsq\Contract;


use Zan\Framework\Components\Nsq\Connection;

interface NsqdDelegate
{
    /**
     * onConnected is called when nsqd connects
     * @param Connection $conn
     * @return mixed
     */
    public function onConnect(Connection $conn);
}