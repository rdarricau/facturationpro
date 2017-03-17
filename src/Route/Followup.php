<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Followup
{
    /** @var string */
    protected $url = "followups";

    /** @var bool */
    protected $firm = true;

    /** @var int **/
    protected $page;

    /** @var string **/
    protected $title;

    /** @var string **/
    protected $status;

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Followup::class;
    }

    public function getAll()
    {
        $params = array(
            "page" => $this->page,
            "title" => $this->title,
            "status" => $this->status
        );
        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }    

    public function get($id)
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,"json",$params);
    }

    public function post(\FacturationPro\Entity\Followup $followup)
    {
        return $this->master->post($this->firm,$this->url,$followup,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Followup $followup)
    {
        return $this->master->patch($this->firm,$this->url,$followup->getId(),$followup,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Followup $followup)
    {
        return $this->master->remove($this->firm,$this->url,$followup->getId());
    }

    /**
     * @param int $page
     * @return Followup
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param string $title
     * @return Followup
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $status
     * @return Followup
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Followup
     */
    public function reset()
    {
        $this->setPage(null);
        $this->setTitle(null);
        $this->setStatus(null);
        return $this;
    }
}