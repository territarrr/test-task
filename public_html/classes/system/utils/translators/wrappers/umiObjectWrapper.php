<?php
 use UmiCms\Service;class umiObjectWrapper extends translatorWrapper {public function translate($va8cfde6331bd59eb2ac96f8911c4b666) {return $this->translateData($va8cfde6331bd59eb2ac96f8911c4b666);}protected function translateData(iUmiObject $va8cfde6331bd59eb2ac96f8911c4b666) {$result = [    'attribute:id' => $va8cfde6331bd59eb2ac96f8911c4b666->getId(),    'attribute:guid' => $va8cfde6331bd59eb2ac96f8911c4b666->getGUID(),    'attribute:name' => $va8cfde6331bd59eb2ac96f8911c4b666->getName(),    'attribute:type-id' => $va8cfde6331bd59eb2ac96f8911c4b666->getTypeId(),    'attribute:type-guid' => $va8cfde6331bd59eb2ac96f8911c4b666->getTypeGUID(),    'attribute:update-time' => $va8cfde6331bd59eb2ac96f8911c4b666->getUpdateTime(),    'attribute:ownerId' => $va8cfde6331bd59eb2ac96f8911c4b666->getOwnerId(),    'attribute:locked' => (int) $va8cfde6331bd59eb2ac96f8911c4b666->getIsLocked(),    'xlink:href' => $va8cfde6331bd59eb2ac96f8911c4b666->getXlink()   ];if ($this->getOption('serialize-related-entities') === false) {return $result;}$v726e8e4809d4c1b28a6549d86436a124 = umiObjectTypesCollection::getInstance()    ->getType($va8cfde6331bd59eb2ac96f8911c4b666->getTypeId());if (getRequest('links') !== null) {$v98248c827299f5fed27aa8d5a9494032 = $this->getObjectEditLink($va8cfde6331bd59eb2ac96f8911c4b666, $v726e8e4809d4c1b28a6549d86436a124);if ($v98248c827299f5fed27aa8d5a9494032) {$result['edit-link'] = $v98248c827299f5fed27aa8d5a9494032;}}$v37a5809f9a759faa7a2db401d89ce84e = Service::Request()    ->isJson();$v865c0c0b4ab0e063e5caa3387c1a8741 = 0;foreach ($v726e8e4809d4c1b28a6549d86436a124->getFieldsGroupsList() as $vdb0f6f37ebeb6ea09489124345af2a45) {$v84f6fb7cd5cd53b5679489a29396448f = parent::get($vdb0f6f37ebeb6ea09489124345af2a45);foreach ($this->getOptionList() as $vb068931cc450442b63f5b3d276ea4297 => $v2063c1608d6e0baf80249c42e2be5804) {$v84f6fb7cd5cd53b5679489a29396448f->setOption($vb068931cc450442b63f5b3d276ea4297, $v2063c1608d6e0baf80249c42e2be5804);}$v9ef2442354c7bbb7c8a4b00cce7dcff2 = $v84f6fb7cd5cd53b5679489a29396448f->translateProperties($vdb0f6f37ebeb6ea09489124345af2a45, $va8cfde6331bd59eb2ac96f8911c4b666);if (empty($v9ef2442354c7bbb7c8a4b00cce7dcff2)) {continue;}$v6a992d5529f459a44fee58c733255e86 = $v37a5809f9a759faa7a2db401d89ce84e ? $v865c0c0b4ab0e063e5caa3387c1a8741++ : ++$v865c0c0b4ab0e063e5caa3387c1a8741;$result['properties']['nodes:group'][$v6a992d5529f459a44fee58c733255e86] = $v9ef2442354c7bbb7c8a4b00cce7dcff2;}return $result;}protected function getObjectEditLink(iUmiObject $va8cfde6331bd59eb2ac96f8911c4b666, iUmiObjectType $v726e8e4809d4c1b28a6549d86436a124) {$v8b1dc169bf460ee884fceef66c6607d6 = cmsController::getInstance();$v89b0b9deff65f8b9cd1f71bc74ce36ba = umiHierarchyTypesCollection::getInstance()    ->getType($v726e8e4809d4c1b28a6549d86436a124->getHierarchyTypeId());if ($v89b0b9deff65f8b9cd1f71bc74ce36ba instanceof iUmiHierarchyType) {$v22884db148f0ffb0d830ba431102b0b5 = $v8b1dc169bf460ee884fceef66c6607d6->getModule($v89b0b9deff65f8b9cd1f71bc74ce36ba->getName());if ($v22884db148f0ffb0d830ba431102b0b5 instanceof def_module) {$v2a304a1348456ccd2234cd71a81bd338 = $v22884db148f0ffb0d830ba431102b0b5->getObjectEditLink($va8cfde6331bd59eb2ac96f8911c4b666->getId(), $v89b0b9deff65f8b9cd1f71bc74ce36ba->getExt());if (is_string($v2a304a1348456ccd2234cd71a81bd338)) {return $v2a304a1348456ccd2234cd71a81bd338;}}}if ($v8b1dc169bf460ee884fceef66c6607d6->getCurrentModule() == 'data' && $v8b1dc169bf460ee884fceef66c6607d6->getCurrentMethod() == 'guide_items') {$v22884db148f0ffb0d830ba431102b0b5 = $v8b1dc169bf460ee884fceef66c6607d6->getModule('data');return (string) $v22884db148f0ffb0d830ba431102b0b5->getObjectEditLink($va8cfde6331bd59eb2ac96f8911c4b666->getId());}return '';}}