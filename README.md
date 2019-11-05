# 使用方法

install文件夹下的文件为使用时所需的文件，请按以下说明部署：

1. 将install/conf/mini_series.php放在配置扩展文件夹中

   1.1. 正常情况下该文件的存放路径是：application/extra/mini_series.php

   1.2. 如需区分模块，不同模块走不同配置，请放置在对应模块下，如放置在admin模块下：application/admin/extra/mini_series.php
   
   1.3. 针对不同的小游戏/小程序/快应用，各自的所需配置不同，另外诸如头条小游戏、微信小游戏，在生成小程序码时存在2种不同的方式（本地/oss）请按实际项目需要选择对应的mini_series.php进行配置
   
   
2. 如您在选择使用oss存储小程序码，请将install/conf/oss.php放在配置扩展文件夹中，oss.php中的参数配置（具体参数说明请见注释）

    2.1. 正常情况下该文件的存放路径是：application/extra/oss.php

    2.2. 如需区分模块，不同模块走不同配置，请放置在对应模块下，如放置在admin模块下：application/admin/extra/oss.php
    
3. 当前版本仅支持：qq小游戏、头条小游戏、微信小游戏，其余支持待后续更新