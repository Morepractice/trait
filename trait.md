# trait的优点
* 更好的整理、组织代码和减少代码的重复性
* 因语言只支持单继承(Java,PHP,Perl、Scala等)，而有些要在多个类的代码无法复用；而支持多继承如(Python、C++)无法解决如**砖石问题**等；Ruby使用mixin但过于复杂
* 在不同类的层次结构中的各个独立类`水平`地重用代码

# trait定义
* trait是为类似php`单继承语言`而准备的一种代码复用机制。

# trait注意點
* 优先顺序
1. trait方法覆盖父类继承的方法
2. 本类方法覆盖trait方法

* 多个traits `method`相同冲突
1. 使用insteadof确定用某个trait
    ```php
    use Music,Football{
        Music::play insteadof Football;
    }
    ```
2. 使用别名as关键字
   ```php
   use Music,Football{
       Football::play as footPlay;
       Music::play insteadof footBall;
   }
   ```

# trait其它特性
* trait与类可以相互访问私有变量和方法
* trait可以包含抽象方法，子类必须要实现