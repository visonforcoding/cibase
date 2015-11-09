#基于CodeIgniter 3.0的改装版基础包#
**修改记录：**

1. 在third_party增加twig包，引入twig模板，主要修改在libraries新增的twig.php，并在autoload.php 配置自动加载twig.php

2. 增加自动加载方法，使得控制器可以继承在core文件夹下的任意父类文件，主要修改在config.php下的最后的一个新增方法
