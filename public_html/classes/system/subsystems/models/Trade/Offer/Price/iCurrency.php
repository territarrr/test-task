<?php
 namespace UmiCms\System\Trade\Offer\Price;interface iCurrency {const ID = 'id';const NAME = 'name';const CODE = 'codename';const ISO_CODE = 'iso_code';const DENOMINATION = 'nominal';const RATE = 'rate';const PREFIX = 'prefix';const SUFFIX = 'suffix';const TYPE_GUID = 'emarket-currency';public function __construct(\iUmiObject $v7beebf4251f2ace3d8e03527fe1bf86e);public function getId();public function getName();public function getCode();public function getISOCode();public function getDenomination();public function setDenomination($vd4192d77ea0e14c40efe4dc9f08fdfb8);public function getRate();public function setRate($v67942503875c1ae74e4b5b80a0dade01);public function getPrefix();public function getSuffix();public function getValue($vb068931cc450442b63f5b3d276ea4297);public function format($v78a5eb43deef9a7b5b9ce157b9d52ac4);public function getDataObject();}