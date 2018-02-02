<?php
namespace deflou\interfaces\services\activities\parameters\compares;

use deflou\interfaces\ICompare;

/**
 * Interface IParameterCompare
 *
 * @package deflou\interfaces\services\activities\parameters\compares
 * @author deflou.dev@gmail.com
 */
interface IParameterCompare
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return ICompare
     */
    public function getInstance(): ICompare;
}
