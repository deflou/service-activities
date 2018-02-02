<?php
namespace deflou\interfaces\services\activities\parameters;

use deflou\interfaces\ICanBeDescribed;
use deflou\interfaces\services\activities\parameters\compares\IParameterCompare;

/**
 * Interface IActivityParameter
 *
 * @package deflou\interfaces\services\activities\parameters
 * @author deflou.dev@gmail.com
 */
interface IActivityParameter extends ICanBeDescribed
{
    /**
     * @return IParameterCompare[]
     */
    public function getCompares();

    /**
     * @param string $name
     *
     * @return IParameterCompare|null
     */
    public function getCompare($name): IParameterCompare;

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasCompare($name): bool;

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();
}
