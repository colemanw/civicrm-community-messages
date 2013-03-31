<?php

namespace CRM\CommunityMessagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequestLog
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RequestLog {
  /**
   * @var integer
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var integer
   *
   * @ORM\Column(name="ts", type="integer")
   */
  private $ts;

  /**
   * @var integer
   *
   * @ORM\Column(name="prot", type="smallint")
   */
  private $prot;

  /**
   * @var string
   *
   * @ORM\Column(name="sid", type="string", length=32)
   */
  private $sid;

  /**
   * @var string
   *
   * @ORM\Column(name="ver", type="string", length=32)
   */
  private $ver;

  /**
   * @var string
   *
   * @ORM\Column(name="uf", type="string", length=16)
   */
  private $uf;


  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set ts
   *
   * @param integer $ts
   * @return RequestLog
   */
  public function setTs($ts) {
    $this->ts = $ts;

    return $this;
  }

  /**
   * Get ts
   *
   * @return integer
   */
  public function getTs() {
    return $this->ts;
  }

  /**
   * Set prot
   *
   * @param integer $prot
   * @return RequestLog
   */
  public function setProt($prot) {
    $this->prot = $prot;

    return $this;
  }

  /**
   * Get prot
   *
   * @return integer
   */
  public function getProt() {
    return $this->prot;
  }

  /**
   * Set sid
   *
   * @param string $sid
   * @return RequestLog
   */
  public function setSid($sid) {
    $this->sid = $sid;

    return $this;
  }

  /**
   * Get sid
   *
   * @return string
   */
  public function getSid() {
    return $this->sid;
  }

  /**
   * Set ver
   *
   * @param string $ver
   * @return RequestLog
   */
  public function setVer($ver) {
    $this->ver = $ver;

    return $this;
  }

  /**
   * Get ver
   *
   * @return string
   */
  public function getVer() {
    return $this->ver;
  }

  /**
   * Set uf
   *
   * @param string $uf
   * @return RequestLog
   */
  public function setUf($uf) {
    $this->uf = $uf;

    return $this;
  }

  /**
   * Get uf
   *
   * @return string
   */
  public function getUf() {
    return $this->uf;
  }
}