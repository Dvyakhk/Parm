<?php

namespace Parm\Binding;

abstract class SQLString
{
	abstract protected function getSQL(\Parm\Factory $factory);
	
}
