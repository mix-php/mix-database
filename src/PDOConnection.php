<?php

namespace Mix\Database;

/**
 * Pdo组件
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class PDOConnection extends BasePDOConnection
{

    // 请求后置事件
    public function onAfterRequest()
    {
        parent::onAfterRequest();
        // 关闭连接
        $this->disconnect();
    }

    // 析构事件
    public function onDestruct()
    {
        parent::onDestruct();
        // 关闭连接
        $this->disconnect();
    }

}
