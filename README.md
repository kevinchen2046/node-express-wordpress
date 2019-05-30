# node-express-wordpress
    一个使用express+wordpress的项目模板

## 创建express项目
    express wrodpress-webserver
    
## 安装express-php-fpm   
    [github](https://github.com/pravdomil/express-php-fpm)
    npm i express-php-fpm

## 安装php 
    https://windows.php.net/download/#php-7.3-ts-VC15-x64

## 下载安装mysql
    注意设置密码

## 下载phpmyadmin并将文件拷贝到{php-web-root}
    https://www.phpmyadmin.net/

## 修改php.ini文件
    php.ini

## 修改 php-fpm.bat 并启动php服务器

### 打开注释并修改
    extension_dir = "./ext"

### 添加扩展
    extension=php_curl.dll
    extension=php_mbstring.dll
    extension=php_mysqli.dll

### 如果你使用nginx
```php
    location ~ \.php$ {
        fastcgi_pass    127.0.0.1:9123;
        fastcgi_index   index.php;
        fastcgi_param   SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include         fastcgi_params;
    }
```
我有4年的flash游戏开发经验和4年的html5游戏开发经验，擅长arpg，休闲类游戏和更多。我同时拥有一些美术素养，可以绘制简单的卡通和基本的动画制作。熟悉主流的html5游戏引擎，比如pixi.js，coscos，egret，layabox以及nodejs开发环境。对于游戏服务端也有所积累，比如基于express的短连接服务器以及基于pomelo的长连接服务器。特别擅长2d游戏的制作。
## 修改app.js
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

## 启动express
    npm start

## 访问phpmyadmin增加wordpress数据库

## 下载wordpress并将文件拷贝到{php-web-root},并访问网站按照引导设置网站