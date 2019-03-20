<?php
 class imageUtils {private static $processor;private static $supportedProcessors = ['imagick', 'gd'];public static function getImageProcessor() {if (!self::$processor) {self::$processor = self::determineProcessor();}return self::$processor;}public static function getImageMagickProcessor() {return self::createProcessor('imagick');}public static function getGDProcessor() {return self::createProcessor('gd');}private static function determineProcessor() {$v3f48301f2668ec4eec370518ddcffe63 = mainConfiguration::getInstance();$ve074dfeaebea479ebf953cf616f31d96 = $v3f48301f2668ec4eec370518ddcffe63->get('kernel', 'image-processor');if ($ve074dfeaebea479ebf953cf616f31d96) {return self::createProcessor($ve074dfeaebea479ebf953cf616f31d96);}foreach (self::$supportedProcessors as $v649ce0650379a0aaff63c1ce257350de) {if (extension_loaded($v649ce0650379a0aaff63c1ce257350de)) {return self::createProcessor($v649ce0650379a0aaff63c1ce257350de);}}throw new Exception("No available extensions for image processing");}private static function createProcessor($v1eb8c42f0b7f64f0b3575a7ef6a570aa) {if (!extension_loaded($v1eb8c42f0b7f64f0b3575a7ef6a570aa)) {throw new Exception("Extension $v1eb8c42f0b7f64f0b3575a7ef6a570aa is not loaded");}switch ($v1eb8c42f0b7f64f0b3575a7ef6a570aa) {case 'imagick':     return new imageMagickProcessor();case 'gd':     return new gdProcessor();default:     throw new Exception("Unsupported extension: $v1eb8c42f0b7f64f0b3575a7ef6a570aa");}}}