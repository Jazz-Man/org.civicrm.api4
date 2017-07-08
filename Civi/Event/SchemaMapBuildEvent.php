<?php

namespace Civi\API\V4\Event;

use Civi\API\V4\Service\Schema\SchemaMap;
use Symfony\Component\EventDispatcher\Event as BaseEvent;

class SchemaMapBuildEvent extends BaseEvent {
  /**
   * @var SchemaMap
   */
  protected $schemaMap;

  /**
   * @param SchemaMap $schemaMap
   */
  public function __construct(SchemaMap $schemaMap) {
    $this->schemaMap = $schemaMap;
  }

  /**
   * @return SchemaMap
   */
  public function getSchemaMap() {
    return $this->schemaMap;
  }

  /**
   * @param SchemaMap $schemaMap
   *
   * @return $this
   */
  public function setSchemaMap($schemaMap) {
    $this->schemaMap = $schemaMap;

    return $this;
  }
}
