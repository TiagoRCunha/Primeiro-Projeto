<?php

namespace App\Model;

/**
 * Class: Poll
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getName
 * @method getVotes
 * @method getUser
 * @method getDeleted
 * @method getOptions
 * @method setName
 * @method setVotes
 * @method setUser
 * @method setDeleted
 * @method setOptions
 */
class Poll
{
  private $name;
  private $votes;
  private $user;
  private $deleted;
  private $options;

  public function __construct(\Illuminate\Http\Request $args)
  {
    $this->name = $args->name ?? "";
    $this->votes = $args->votes ?? [""];
    $this->user = $args->user ?? "";
    $this->deleted = $args->deleted ?? false;
    $this->options = $args->options ?? [""];
  }

  /**
   * Get the value of name
   * @return name
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   * @param string $name
   * @return self
   */
  public function setName(string $name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * Get the value of votes
   * @return votes
   */
  public function getVotes(): array
  {
    return $this->votes;
  }

  /**
   * Set the value of votes
   * @param string $votes
   * @return self
   */
  public function setVotes(array $votes)
  {
    $this->votes = $votes;
    return $this;
  }

  /**
   * Get the value of user
   * @return user
   */
  public function getUser(): string
  {
    return $this->user;
  }

  /**
   * Set the value of user
   * @param object $user
   * @return self
   */
  public function setUser(string $user)
  {
    $this->user = $user;
    return $this;
  }

  /**
   * Get the value of deleted
   * @return deleted
   */
  public function getDeleted(): bool
  {
    return $this->deleted;
  }

  /**
   * Set the value of deleted
   * @param bool $deleted
   * @return self
   */
  public function setDeleted(bool $deleted)
  {
    $this->deleted = $deleted;
    return $this;
  }

  /**
   * Get the value of options
   * @return options
   */
  public function getOptions(): array
  {
    return $this->options;
  }

  /**
   * Set the value of options
   * @param array $options
   * @return self
   */
  public function setOptions(array $options)
  {
    $this->options = $options;
    return $this;
  }
}