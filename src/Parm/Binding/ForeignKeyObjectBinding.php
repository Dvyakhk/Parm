<?php

namespace Parm\Binding;

class ForeignKeyObjectBinding extends EqualsBinding
{
	/**
	 * Filter rows by foreign key object
	 * @param \Parm\Object $object
	 * @param string|null $localField field to bind against in the factory you are using (optional)
	 * @param string|null $objectField field from the object to get the value from (optional)
	 */
	function __construct(\Parm\Object $object, $localField = null, $objectField = null)
	{
		if($localField == null)
		{
			$localField = $object->getIdField();
		}
		
		if($objectField == null)
		{
			$value = $object->getId();
		}
		else
		{
			if(array_key_exists($objectField,$object))
			{
				$value = $object[$objectField];
			}
			else
			{
				throw new \Parm\ErrorException("ForeignKeyObjectBinding objectField does not exist in object");
			}

		}
		
		parent::__construct($localField, $value);
	}
}
