/**
 * Singleton class
 *
 */
final class UserFactory
{
    private static $_instance = null;

    /**
     * Private constructor
     *
     */
    private function __construct() {}

    /**
     * Private clone method
     *
     */
     private function __clone() {}

    /**
     * Call this method to get singleton
     *
     * @return UserFactory
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new UserFactory();
        }
        return self::$_instance;
    }
}