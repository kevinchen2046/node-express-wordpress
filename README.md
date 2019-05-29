#node-express-wordpress
    一个使用express+wordpress的项目模板

##创建express项目
    express wrodpress-webserver
    
##安装express-php-fpm   
    [github](https://github.com/pravdomil/express-php-fpm)
    npm i express-php-fpm

##安装php 
    https://windows.php.net/download/#php-7.3-ts-VC15-x64

##下载安装mysql
    注意设置密码

##下载phpmyadmin并将文件拷贝到{php-web-root}
    https://www.phpmyadmin.net/

##修改php.ini文件
    php.ini

##修改 php-fpm.bat 并启动php服务器

###打开注释并修改
    extension_dir = "./ext"

###添加扩展
    extension=php_curl.dll
    extension=php_mbstring.dll
    extension=php_mysqli.dll

###如果你使用nginx
```php
    location ~ \.php$ {
        fastcgi_pass    127.0.0.1:9123;
        fastcgi_index   index.php;
        fastcgi_param   SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include         fastcgi_params;
    }
```

##修改app.js
```javascript
    const express = require("express")
    const epf = require("express-php-fpm").default

    const options = {
      // root of your php files
      documentRoot: __dirname + "/{php-web-root}",

      // extra env variables
      env: {},

      // connection to your php-fpm server
      // https://nodejs.org/api/net.html#net_socket_connect_options_connectlistener
      socketOptions: { port: 9000 },
    }

    const app = express()
    app.use("/", epf(options))
    app.listen(3000)
```

##启动express
    npm start

##访问phpmyadmin增加wordpress数据库

##下载wordpress并将文件拷贝到{php-web-root},并访问网站按照引导设置网站