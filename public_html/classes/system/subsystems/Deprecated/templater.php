<?php
 class templater extends singleton {public static function getInstance($v4a8a08f09d37b73795649038408b5f33 = null) {return cmsController::getInstance()->getCurrentTemplater();}protected function __construct() {}public function init() {}public function loadLangs() {}public function putLangs($va43c1b0aa53a0c908810c06ab1ff3967) {}public function parseInput($va43c1b0aa53a0c908810c06ab1ff3967) {}public function parseResult() {}public function parseContent($v47c80780ab608cc046f2a6e6f071feb6, $v640eac53ad75db5c49a9ec86390d8530) {}public function loadTemplates($v6a2a431fe8b621037ea949531c28551d, $v4a8a08f09d37b73795649038408b5f33, $args) {return [];}public function parseMacros($vdc3ef687d19cc2fb071d846f9360ecbe) {return def_module::parseTPLMacroses($vdc3ef687d19cc2fb071d846f9360ecbe);}public function executeMacros($v8ee1d4327d02df333859c8dd0101aae8) {}public static function pushEditable($v22884db148f0ffb0d830ba431102b0b5, $vea9f6aca279138c58f705c8d4cb4b8ce, $vb80bb7740288fda1f201890375a60c8f) {return def_module::pushEditable($v22884db148f0ffb0d830ba431102b0b5, $vea9f6aca279138c58f705c8d4cb4b8ce, $vb80bb7740288fda1f201890375a60c8f);}final public static function getSomething($v0f4153145310ca3a80263d772ccd01d4 = "pro", $v524605ba82e4bb94b84e3a394c2b5879 = null) {return umiTemplater::getSomething($v0f4153145310ca3a80263d772ccd01d4, $v524605ba82e4bb94b84e3a394c2b5879);}public function cleanUpResult($va43c1b0aa53a0c908810c06ab1ff3967) {}}?>