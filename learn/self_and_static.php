<?php
class Person
{
    public static function name()
    {
        echo "xiaosan";
    }
    public static function callself()
    {
        self::name();
    }

    public static function callstatic()
    {
        static::name();
    }
}

class Man extends Person
{
    public static function name()
    {
        echo "gaojin";
    }
}
Man::name();  // output： gaojin
echo '<br>';
Person::callself();  // output： xiaosan
echo '<br>';
Person::callstatic();  // output：xiaosan
echo '<br>';
Man::callstatic();  // gaojin
echo '<br>';
Man::callself();  // xiaosan


//slef
//子类继承父类方法，其实并不是把父类方法拿过来，而是有了父类方法的访问权限，
//当调用子类里没有的方法时，会去父类里找，找到后在父类里执行，自然就self指向父类