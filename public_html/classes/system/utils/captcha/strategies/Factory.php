<?php
 namespace UmiCms\Classes\System\Utils\Captcha\Strategies;class Factory {public static function get($vb068931cc450442b63f5b3d276ea4297) {switch ($vb068931cc450442b63f5b3d276ea4297) {case 'recaptcha':     return new GoogleRecaptcha();case 'captcha':     return new ClassicCaptcha();}return new NullCaptcha();}}