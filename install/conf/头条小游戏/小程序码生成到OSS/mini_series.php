<?php
return [
    // +----------------------------------------------------------------------
    // | 小游戏/小程序/快应用对接配置信息
    // +----------------------------------------------------------------------
    'app_name' => 'demo',//填写小游戏/小程序/快应用名称，一旦上线谨慎修改，曾经调取过此参数的记录将不做变更，仅对更新后版本有效
    'app_id' => '123456789',//请从官方获取
    'app_secret' => 'dlRbGSXmddYqiLH',//请从官方获取
    'app_token' => 'd65667b1d6b415cfaae86bf1cf4d2a8f',//请从官方获取
    'app_redis_cache_db_number' => 1,//缓存到redis的DB编号
    'app_redis_cache_key_prefix' => 'toutiao:minigame:demo',//缓存到redis时所有key的前缀
    'app_qrcode_request_url_prefix' => '//demo.oss-cn-shanghai.aliyuncs.com',//小程序码存储的相对目录（对访问域名而言）
];