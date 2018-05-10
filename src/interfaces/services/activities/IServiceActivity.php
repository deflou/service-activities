<?php
namespace deflou\interfaces\services\activities;

use deflou\interfaces\ICanBeDescribed;
use deflou\interfaces\services\activities\parameters\IActivityParameter;

/**
 * Interface IServiceActivity
 *
 * @package deflou\interfaces\services\activities
 * @author deflou.dev@gmail.com
 */
interface IServiceActivity extends ICanBeDescribed
{
    /**
     * @return IActivityParameter[]
     */
    public function getParameters();

    /**
     * @param string $name
     *
     * @return IActivityParameter
     */
    public function getParameter($name): IActivityParameter;

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasParameter($name): bool;

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return $this
     */
    public function setParameter($name, $value);

    public function getDispatchers();

    /**
     * @param mixed $context
     *
     * @return $this
     */
    public function applyDispatchersTo($context);
}
