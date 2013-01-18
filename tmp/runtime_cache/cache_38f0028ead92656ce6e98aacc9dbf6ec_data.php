<?php return array (
  'expired' => 1358513968,
  'data' => 
  array (
    0 => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'scale' => NULL,
        'type' => 'int',
        'length' => '11',
        'ptype' => 'autoincr',
        'not_null' => true,
        'pk' => true,
        'auto_incr' => true,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '编号',
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'scale' => NULL,
        'type' => 'int',
        'length' => '11',
        'ptype' => 'int4',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '父编号',
      ),
      'path' => 
      array (
        'name' => 'path',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '255',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '层次路径',
      ),
      'name' => 
      array (
        'name' => 'name',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '64',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '显示名称',
      ),
      'description' => 
      array (
        'name' => 'description',
        'scale' => NULL,
        'type' => 'varchar',
        'length' => '255',
        'ptype' => 'varchar',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => '',
        'has_default' => true,
        'desc' => '描述信息',
      ),
      'weight' => 
      array (
        'name' => 'weight',
        'scale' => NULL,
        'type' => 'int',
        'length' => '11',
        'ptype' => 'int4',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => 0,
        'has_default' => true,
        'desc' => '权重',
      ),
      'enabled' => 
      array (
        'name' => 'enabled',
        'scale' => NULL,
        'type' => 'tinyint',
        'length' => '2',
        'ptype' => 'int1',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => 1,
        'has_default' => true,
        'desc' => '可用性',
      ),
      'created' => 
      array (
        'name' => 'created',
        'scale' => NULL,
        'type' => 'int',
        'length' => '11',
        'ptype' => 'int4',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '创建时间',
      ),
      'updated' => 
      array (
        'name' => 'updated',
        'scale' => NULL,
        'type' => 'int',
        'length' => '11',
        'ptype' => 'int4',
        'not_null' => true,
        'pk' => false,
        'auto_incr' => false,
        'binary' => false,
        'unsigned' => false,
        'default' => NULL,
        'has_default' => NULL,
        'desc' => '更新时间',
      ),
    ),
    1 => 
    array (
      'id' => true,
      'parent_id' => true,
      'path' => true,
      'name' => true,
      'description' => true,
      'weight' => true,
      'enabled' => true,
      'created' => true,
      'updated' => true,
    ),
  ),
);