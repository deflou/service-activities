<?php
namespace deflou\interfaces\services\activities;

use deflou\interfaces\triggers\results\ITriggerResult;

/**
 * Interface IServiceAction
 *
 * @package deflou\interfaces\services\activities
 * @author deflou.dev@gmail.com
 */
interface IServiceAction extends IServiceActivity
{
    /**
     * @return ITriggerResult
     */
    public function trigger(): ITriggerResult;
}
