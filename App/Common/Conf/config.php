<?php
return array(
	//'配置项'=>'配置值'




	/*加载全局函数库*/
	'LOAD_EXT_FILE'		=>'gloabl.func',

	/* 数据库设置 */
	'DB_TYPE'               =>  'mysqli',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'shoes_feiyan',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'wolf',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  '',    // 数据库表前缀
	'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
	'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
	'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

	/*可以访问的模块*/
	'MODULE_ALLOW_LIST'		=> array('Home','Admin'),
	'MODULE_DENY_LIST'		=>array('Common','Runtime','Sample','Porduct','User','Orders','Finance','Storehouse'),

	/*默认访问的模块*/
	'DEFAULT_MODULE'        =>  'Admin',  // 默认模块



	/*模板引擎设置*/
	'TAGLIB_BEGIN'          =>  '<%',  // 标签库标签开始标记
	'TAGLIB_END'            =>  '%>',  // 标签库标签结束标记

	'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记



	/* URL设置 */
	'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写

	'URL_MODEL'				=>	2  ,     //采用重写机制

	/*上传文件的路径*/
	'UPLOADIMG_DIR' 		=> './Uploads/',
	'UPLOADIMG_URL' 		=> '/Uploads/',


);
