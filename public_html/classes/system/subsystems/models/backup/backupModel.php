<?php
 use UmiCms\Service;class backupModel extends singleton implements iBackupModel {protected function __construct() {}public static function getInstance($v4a8a08f09d37b73795649038408b5f33 = null) {return parent::getInstance(__CLASS__);}public function getChanges($va6eb4816205178e88dad66a16a19ff45 = false) {$va9205dcfd4a6f7c2cbe8be01566ff84a = Service::Registry();if (!$va9205dcfd4a6f7c2cbe8be01566ff84a->get('modules/backup/enabled')) {return false;}$vaa9f73eea60a006820d0f8768bc8a3fc = (int) $va9205dcfd4a6f7c2cbe8be01566ff84a->get('//modules/backup/max_save_actions');$vbae06316313152c3dd23cc012ff88343 = (int) $va9205dcfd4a6f7c2cbe8be01566ff84a->get('//modules/backup/max_timelimit');$vc5b5790b8b74a68d0cde09c8f1080fc5 = $vbae06316313152c3dd23cc012ff88343 * 3600 * 24;$v4717d53ebfdfea8477f780ec66151dcb = ConnectionPool::getInstance()->getConnection();$va6eb4816205178e88dad66a16a19ff45 = (int) $va6eb4816205178e88dad66a16a19ff45;$vaa9f73eea60a006820d0f8768bc8a3fc = ($vaa9f73eea60a006820d0f8768bc8a3fc > 2) ? $vaa9f73eea60a006820d0f8768bc8a3fc : 2;$vac5c74b64b4b8352ef2f181affb5ac2a =    "SELECT id, ctime, changed_module, user_id, is_active FROM cms_backup WHERE param='" . $va6eb4816205178e88dad66a16a19ff45 . "' AND (" .    time() . '-ctime)<' . $vc5b5790b8b74a68d0cde09c8f1080fc5 . " ORDER BY ctime DESC LIMIT {$vaa9f73eea60a006820d0f8768bc8a3fc}";$result = $v4717d53ebfdfea8477f780ec66151dcb->queryResult($vac5c74b64b4b8352ef2f181affb5ac2a);if ($result->length() < 2) {$vac5c74b64b4b8352ef2f181affb5ac2a = "SELECT id, ctime, changed_module, user_id, is_active FROM cms_backup WHERE param='" . $va6eb4816205178e88dad66a16a19ff45 .     "' ORDER BY ctime DESC LIMIT 2";$result = $v4717d53ebfdfea8477f780ec66151dcb->queryResult($vac5c74b64b4b8352ef2f181affb5ac2a);}$v21ffce5b8a6cc8cc6a41448dd69623c9 = [];$vdf347a373b8f92aa0ae3dd920a5ec2f6 = [];$result->setFetchType(IQueryResult::FETCH_ASSOC);foreach ($result as $vf1965a857bc285d26fe22023aa5ab50d) {$v76383df3d587e927e7477f796135b77e = $this->getChangeInfo(     $vf1965a857bc285d26fe22023aa5ab50d['id'],     $vf1965a857bc285d26fe22023aa5ab50d['ctime'],     $vf1965a857bc285d26fe22023aa5ab50d['changed_module'],     $va6eb4816205178e88dad66a16a19ff45,     $vf1965a857bc285d26fe22023aa5ab50d['user_id'],     $vf1965a857bc285d26fe22023aa5ab50d['is_active']    );if (count($v76383df3d587e927e7477f796135b77e)) {$vdf347a373b8f92aa0ae3dd920a5ec2f6[] = $v76383df3d587e927e7477f796135b77e;}}$v21ffce5b8a6cc8cc6a41448dd69623c9['nodes:revision'] = $vdf347a373b8f92aa0ae3dd920a5ec2f6;return $v21ffce5b8a6cc8cc6a41448dd69623c9;}public function getOverdueChanges($v84e03446728f3b83ee9440e5b4e52fb1 = 30) {if ($v84e03446728f3b83ee9440e5b4e52fb1 === 0) {return [];}$vf4954029b8440447930f092c4781aff8 = 24 * 3600;$vb72919118534641d7e15719a8ce1397d = $v84e03446728f3b83ee9440e5b4e52fb1 * $vf4954029b8440447930f092c4781aff8;$v4717d53ebfdfea8477f780ec66151dcb = ConnectionPool::getInstance()->getConnection();$v64528587ef7dc674387251756cccd6d7 = <<<QUERY
				SELECT *
				FROM   `cms_backup` 
				WHERE  `ctime` < unix_timestamp() - ${vb72919118534641d7e15719a8ce1397d};
QUERY;
				DELETE 
				FROM   `cms_backup` 
				WHERE  `id` IN (${v36bb03c00577049736e662c77ec82c70})
QUERY;
DELETE FROM `cms_backup` WHERE `param` = $va6eb4816205178e88dad66a16a19ff45
SQL;
SELECT id, ctime, changed_module, param, user_id, is_active
FROM cms_backup ORDER BY ctime DESC LIMIT 100
SQL;
INSERT INTO cms_backup (ctime, changed_module, changed_method, param, param0, user_id, is_active)
				VALUES('{$v1ed2e1b19b6e55d52d2473be17a4afd9}', '{$v7b975dff6c0134c6f231fd13895c2349}', '{$vb6ad8768e9a35023e3d824c5057699d1}', '{$va6eb4816205178e88dad66a16a19ff45}', '{$vdd8086e8cfd7708cd20d06bf319817dc}', '{$v8e44f0089b076e18a718eb9ca3d94674}', '1')
SQL;
INSERT INTO cms_backup (ctime, param, user_id, param0)
VALUES('{$v07cc694b9b3fc636710fa08b6922c42b}', '{$veca07335a33c5aeb5e1bc7c98b4b9d80}', '{$v8e44f0089b076e18a718eb9ca3d94674}', '{$v07cc694b9b3fc636710fa08b6922c42b}')
SQL;