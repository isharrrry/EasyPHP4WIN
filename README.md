#EasyPHP4WIN

EasyPHP4WIN是一个用Arduino IDE，学习PHP的小插件。

该插件基于Bamcompile-PHP项目，所以仅支持Windows平台。

整个插件压缩后仅2MB大小。免去搭配网站环境的麻烦，适合新手。

Q：为什么基于Arduino IDE？

A：Arduino IDE具有文本编辑区，项目保存、导入等功能，非常适合写php小应用，然后发布。

Q：能否发布网站？

A：目前基于Bamcompile-PHP，仅支持CMD下运行，适合开发小应用，最多可以打包成EXE小应用发布。

Q：如何使用？

A：hardware文件夹复制到Arduino IDE根目录下，然后按HowToUse文件夹下图示三步走。

#EasyPHP4WIN

EasyPHP4WIN is a small plug-in with Arduino IDE, learning PHP.

The plugin is based on the Bamcompile-PHP project, so it only supports the Windows platform.

The entire plugin is compressed only 2MB in size. Eliminating the trouble with the site environment, suitable for novice.

Q: Why based on Arduino IDE?

A: Arduino IDE has a text editing area, the project save, import and other functions, very suitable for writing php applet, and then released.

Q: Can I post a website?

A: Currently based on Bamcompile-PHP, only support CMD under the run, suitable for the development of small applications, up to pack into EXE small application release.

Q: How to use?

A: hardware folder to the Arduino IDE root directory, and then press the HowToUse folder shown below three steps.


##PHP Code Demo:

<?php

  $a = 8;

  $b = 2;

  $c = 3;

  echo $a+$b."\n";

  echo $a-$b."\n";

  echo $a*$b."\n";

  echo $a/$b."\n";

  echo $a%$c."\n";

  $a++;

  echo $a."\n";

  $c--;

  echo $c;

?>


