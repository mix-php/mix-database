<?php

namespace Mix\Database;

/**
 * Interface ExecuteListenerInterface
 * @package Mix\Database
 * @author liu,jian <coder.keda@gmail.com>
 */
interface ExecuteListenerInterface
{

    /**
     * 监听
     * @param array $log
     */
    public function listen($log);

}
