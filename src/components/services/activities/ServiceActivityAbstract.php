<?php
namespace deflou\components\services\activities;

use deflou\interfaces\services\activities\IServiceActivity;

/**
 * Class ServiceActivityAbstract
 *
 * @package deflou\components\services\activities
 * @author deflou.dev@gmail.com
 */
class ServiceActivityAbstract implements IServiceActivity
{
    protected $activity = [];

    /**
     * ServiceActivityAbstract constructor.
     * @param array $activity
     */
    public function __construct($activity = [])
    {
        $this->activity = $activity;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute(static::NAME);
    }

    /**
     * @param string $name
     *
     * @return ServiceActivityAbstract
     */
    public function setName($name)
    {
        return $this->setAttribute(static::NAME, $name);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->getAttribute(static::TITLE);
    }

    /**
     * @param string $title
     *
     * @return ServiceActivityAbstract
     */
    public function setTitle($title)
    {
        return $this->setAttribute(static::TITLE, $title);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getAttribute(static::DESCRIPTION);
    }

    /**
     * @param string $description
     *
     * @return ServiceActivityAbstract
     */
    public function setDescription($description)
    {
        return $this->setAttribute(static::DESCRIPTION, $description);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    abstract protected function getAttribute($name);

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return $this
     */
    abstract protected function setAttribute($name, $value);
}
