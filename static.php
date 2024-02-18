<?php
class Count {
    public static $count = 0;

    public static function addCount($addValue) {
        self::$count= self::$count+$addValue;
        return self::$count;
    }
}
Count::addCount(1);//add 1 to $count
echo Count::$count. "</br>";//return 1
$object=new Count;
echo $object->addCount(2). "</br>";//return 3
?>
