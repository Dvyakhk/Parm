<?php

/*
 * This file is part of Parm. If upgrading from Parm1 to Parm2 this file will help with class aliases
 *
 * Note: The generator is not added to the global namespace
 *
 * (c) Andrew Cassell <me@andrewcassell.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */



class_alias('Parm\DatabaseNode', 'DatabaseNode');
class_alias('Parm\Database', 'Database');
class_alias('Parm\DataArray', 'DataAccessArray');
class_alias('Parm\DatabaseProcessor', 'DatabaseProcessor');

class_alias('Parm\Factory', 'DataAccessObjectFactory');
class_alias('Parm\Object', 'DataAccessObject');
class_alias('Parm\Object', 'Parm\DataAccessObject');
class_alias('Parm\Factory', 'Parm\DataAccessObjectFactory');

class_alias('Parm\Binding\SQLString', 'SQLString');
class_alias('Parm\Binding\Conditional\AndConditional', 'AndConditional');
class_alias('Parm\Binding\Conditional\OrConditional', 'OrConditional');
class_alias('Parm\Binding\Binding', 'Binding');
class_alias('Parm\Binding\StringBinding', 'StringBinding');
class_alias('Parm\Binding\CaseSensitiveEqualsBinding', 'CaseSensitiveEqualsBinding');
class_alias('Parm\Binding\ContainsBinding', 'ContainsBinding');
class_alias('Parm\Binding\EqualsBinding', 'EqualsBinding');
class_alias('Parm\Binding\FalseBooleanBinding', 'FalseBooleanBinding');
class_alias('Parm\Binding\ForeignKeyObjectBinding', 'ForeignKeyObjectBinding');
class_alias('Parm\Binding\InBinding', 'InBinding');
class_alias('Parm\Binding\NotInBinding', 'NotInBinding');
class_alias('Parm\Binding\NotEqualsBinding', 'NotEqualsBinding');
class_alias('Parm\Binding\TrueBooleanBinding', 'TrueBooleanBinding');
class_alias('Parm\Binding\DateBinding', 'DateBinding');