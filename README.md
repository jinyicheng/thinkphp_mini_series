# 使用方法

install文件夹下的文件为使用时所需的文件，请按以下说明部署：

二维码生成目前支持本地和阿里云OSS2种，如使用阿里云OSS需要将install/conf/oss.php放在配置扩展文件夹中，oss.php中的参数配置（具体参数说明请见注释）

* 正常情况下该文件的存放路径是：application/extra/oss.php

* 如需区分模块，不同模块走不同配置，请放置在对应模块下，如放置在admin模块下：application/admin/extra/oss.php