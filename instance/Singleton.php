trait Singleton{
    private static $instance;
    //单例
    public static function getInstance(){
        if(!(self::instance instanceof self)){
            self::instance = new self;
        }
        return self::instance;
    }
}
