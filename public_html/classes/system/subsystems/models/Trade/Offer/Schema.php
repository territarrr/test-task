<?php
 namespace UmiCms\System\Trade\Offer;use UmiCms\System\Orm\Entity\Schema as AbstractSchema;class Schema extends AbstractSchema implements iSchema {protected function getRelatedContainerCustomNameList() {return parent::getRelatedContainerCustomNameList() + [    iMapper::TYPE_ID => 'cms3_object_types',    iMapper::DATA_OBJECT_ID => 'cms3_objects'   ];}protected function getRelatedExchangeCustomNameList() {return parent::getRelatedExchangeCustomNameList() + [    iMapper::TYPE_ID => 'cms3_import_types',    iMapper::DATA_OBJECT_ID => 'cms3_import_objects'   ];}protected function getNameSpaceRoot() {return 'UmiCms\System\Trade\\';}}