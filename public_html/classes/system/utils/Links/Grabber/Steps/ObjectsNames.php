<?php
 namespace UmiCms\Classes\System\Utils\Links\Grabber\Steps;class ObjectsNames extends Step implements \iUmiDataBaseInjector {use \tUmiDataBaseInjector;protected $offset;protected $limit;const STEP_NAME = 'ObjectsNames';const OFFSET_KEY = 'offset';const LIMIT_KEY = 'limit';const ITERATION_ITEMS_NUMBER_DEFAULT_LIMIT = 150;public function getName() {return self::STEP_NAME;}public function getStartStateStructure() {return [    self::OFFSET_KEY => 0,    self::LIMIT_KEY => self::ITERATION_ITEMS_NUMBER_DEFAULT_LIMIT,    self::COMPLETE_KEY => false,   ];}public function setState(array $v9ed39e2ea931586b6a985a6942ef573e) {if (!isset($v9ed39e2ea931586b6a985a6942ef573e[self::OFFSET_KEY])) {throw new \wrongParamException('Cant detect offset');}$v7a86c157ee9713c34fbd7a1ee40f0c5a = $v9ed39e2ea931586b6a985a6942ef573e[self::OFFSET_KEY];if (!isset($v9ed39e2ea931586b6a985a6942ef573e[self::LIMIT_KEY])) {throw new \wrongParamException('Cant detect limit');}$vaa9f73eea60a006820d0f8768bc8a3fc = $v9ed39e2ea931586b6a985a6942ef573e[self::LIMIT_KEY];if (!isset($v9ed39e2ea931586b6a985a6942ef573e[self::COMPLETE_KEY])) {throw new \wrongParamException('Cant detect complete status');}$vf94c28463eca606eda684e34af8244cf = $v9ed39e2ea931586b6a985a6942ef573e[self::COMPLETE_KEY];$this->setOffset($v7a86c157ee9713c34fbd7a1ee40f0c5a)    ->setLimit($vaa9f73eea60a006820d0f8768bc8a3fc)    ->setCompleteStatus($vf94c28463eca606eda684e34af8244cf);return $this;}public function grab() {if ($this->isComplete()) {return $this;}$vaa9f73eea60a006820d0f8768bc8a3fc = (int) $this->getLimit();$v7a86c157ee9713c34fbd7a1ee40f0c5a = (int) $this->getOffset();$v4717d53ebfdfea8477f780ec66151dcb = $this->getConnection();$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT
	`id`,
	`name`
FROM
	`cms3_objects`
WHERE
	`name` IS NOT NULL
LIMIT
	$v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc;
SQL;