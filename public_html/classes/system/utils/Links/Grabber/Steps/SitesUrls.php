<?php
 namespace UmiCms\Classes\System\Utils\Links\Grabber\Steps;class SitesUrls extends ObjectsNames implements \iUmiPagesInjector {use \tUmiPagesInjector;const STEP_NAME = 'SitesUrls';const USER_AGENT = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:48.0) Gecko/20100101 Firefox/48.0';const GET_HTTP_REQUEST_TYPE = 'GET';const ITERATION_ITEMS_NUMBER_DEFAULT_LIMIT = 3;const CURL_TIMEOUT = 9;public function getName() {return self::STEP_NAME;}public function getStartStateStructure() {return [    self::OFFSET_KEY => 0,    self::LIMIT_KEY => self::ITERATION_ITEMS_NUMBER_DEFAULT_LIMIT,    self::COMPLETE_KEY => false,   ];}public function grab() {if ($this->isComplete()) {return $this;}$vaa9f73eea60a006820d0f8768bc8a3fc = (int) $this->getLimit();$v7a86c157ee9713c34fbd7a1ee40f0c5a = (int) $this->getOffset();$v4717d53ebfdfea8477f780ec66151dcb = $this->getConnection();$vac5c74b64b4b8352ef2f181affb5ac2a = <<<SQL
SELECT
	`cms3_hierarchy`.`id`
FROM
	`cms3_hierarchy`
WHERE
	`cms3_hierarchy`.is_active = 1
AND
	`cms3_hierarchy`.is_deleted = 0
LIMIT
	$v7a86c157ee9713c34fbd7a1ee40f0c5a, $vaa9f73eea60a006820d0f8768bc8a3fc;
SQL;