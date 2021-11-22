<?php

require_once('Item.php');

class Example extends Item {

  private $id;
  private $field;

  public function __construct($id = null, $field = null) {
    parent::__construct();

    $this->id = $id;
    $this->field = $field;

    $this->tableName = 'person';
  }

  // create your own PDO statement
  public function save() {
    try {

      if(!empty($this->id))
        $stmt = $this->conn->prepare('UPDATE `person` SET `name` = :name WHERE `id` = :id;');
      else
        $stmt = $this->conn->prepare('INSERT INTO `person` (`name`) VALUES (:name);');

      if (!empty($this->id))
        $stmt->bindParam(':id', $this->id);
      $stmt->bindParam(':name', $this->name);

      if ($stmt->execute())
        return $stmt->rowCount();
      else
        $this->helper->log->generateLog('Error during PERSON SAVE.');

    } catch (\Exception $e) {
      $this->helper->log->generateLog($e->getMessage());
    }
  }

  // or try the query builder! (check examples on README)
  public function updateName() {

    $stmt = $this->statementQueryBuilder(
      'update',
      [
        'name' => 'Rick',
        'lastname' => 'Sanchez'
      ],
      [
        [
          'field' => 'id',
          'operator' => '=',
          'value' => 8
        ]
      ]
    );

    if ($stmt->execute())
      return $stmt->rowCount();
    else
      $this->helper->log->generateLog('Error during SQL exec :(');
  }
}
