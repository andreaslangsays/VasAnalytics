<?php

namespace VasAnalytics\Models;

use Shopware\Components\Model\ModelEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="s_plugin_statistics")
 * @ORM\Entity(repositoryClass="Repository")
 */
class Statistics extends ModelEntity
{
    /**
     * Primary Key - autoincrement value
     *
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * SessionId - stores session Id
     * 
     * @var string $sessionId
     * 
     * @ORM\Column(name="sessionId", type="string", nullable=false)
     */
    private $sessionId;

    /**
     * ControllerPath - controller path including action
     * 
     * @var string $controllerPath
     * 
     * @ORM\Column(name="controllerPath", type="string", nullable=false)
     */
    private $controllerPath;

    /**
     * userId - stores user ID
     * 
     * @var string $userId
     * 
     * @ORM\Column(name="userId", type="string", nullable=false)
     */
    private $userId;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * @param $sessionId string
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return string
     */
    public function getControllerPath()
    {
        return $this->controllerPath;
    }
    /**
     * @param $controllerPath string
     */
    public function setControllerPath($controllerPath)
    {
        $this->controllerPath = $controllerPath;
    }

    
}
