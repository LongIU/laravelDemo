<?php
class Person
{
    public static function name()
    {
        echo "xiaosan";
    }
    public static function callself()
    {
        return self::name();
    }

    public static function callstatic()
    {
        return static::name();
    }

    public function callthis()
    {
        return $this->name();
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

$newname = new Man();
echo "====\n";
echo $newname->callthis() . "\n";
/**
 * slef
 * 子类继承父类方法，其实并不是把父类方法拿过来，而是有了父类方法的访问权限，
 * 当调用子类里没有的方法时，会去父类里找，找到后在父类里执行，自然就self指向父类
 * (1).self是參照到目前的class，$this是參照到目前的object ( 已經被宣告的實體上 )
 * (2).self 可使用在static上，$this不行
 * static method 因為沒有物件的實體，所以需要注意不可以使用 $this ，要用self::
 *  可以直接存取 static method ( 如self::method() )，但是無法直接存取 static property 中的預先宣告的值
 * (3). 可用 new self() 呼叫自己
 */

echo '\n';
class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        self::foo();
        $this->foo();
        static::foo();
    }
}

class B extends A {
   /* foo() will be copied to B, hence its scope will still be A and
    * the call be successful */
}

class C extends A {
    public function foo() {
        echo '123\n';
        /* original method is replaced; the scope of the new one is C */
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test();   //fails


