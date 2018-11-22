<?php
/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since 1.0.0
 * @package Myusefulplugin
 * @subpackage Myusefulplugin/includes
 * @author AuthorName <AuthorEmail@email.com>
 */
class MyusefulpluginActivator
{
    public static function activate()
    {
    }

    /**
     * Simple Example for create table
     */
//
//    const TABLE_FIRST = 'mup_first_table';
//    const TABLE_SECOND = 'mup_second_table';
//
//    const DB_VERSION = '1.2';
//
//    /**
//     * Short Description. (use period)
//     *
//     * Long Description.
//     *
//     * @since 1.0.0
//     */
//    public static function activate()
//    {
//        global $jal_db_version;
//        $installedVersion = get_option("jal_db_version");
//
//        if (!$installedVersion) {
//            self::createFirstTalble();
//            self::createSecondTalble();
//        } else {
//            switch ($installedVersion) {
//                case '1.0':
//                    self::updateTo1Dot1();
//                case '1.1':
//                    self::updateTo1Dot2();
//            }
//        }
//
//        update_option('jal_db_version', self::DB_VERSION);
//    }
//
//    /**
//     * Create first table
//     *
//     * @since 1.0.0
//     */
//    private static function createFirstTalble()
//    {
//        global $wpdb;
//
//        $tableName = $wpdb->prefix . self::TABLE_FIRST;
//
//        if ($wpdb->get_var("show tables like '$tableName'") !== $tableName) {
//            $sql = "CREATE TABLE " . $tableName . " (
//                  id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
//                  post_id BIGINT(20) UNSIGNED NOT NULL,
//                  text TEXT NOT NULL,
//                  hash VARCHAR(32) NOT NULL,
//                  PRIMARY KEY(id),
//                  INDEX post_id (post_id)
//                );";
//
//            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//            dbDelta($sql);
//        }
//    }
//
//    /**
//     * Create first table
//     *
//     * @since 1.2.0
//     */
//    private static function createSecondTalble()
//    {
//        global $wpdb;
//
//        $tableName = $wpdb->prefix . self::TABLE_SECOND;
//
//        if ($wpdb->get_var("show tables like '$tableName'") !== $tableName) {
//            $sql = "CREATE TABLE " . $tableName . " (
//                  id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
//                  post_id BIGINT(20) UNSIGNED NOT NULL,
//                  text TEXT NOT NULL,
//                  hash VARCHAR(32) NOT NULL,
//                  PRIMARY KEY(id),
//                  INDEX post_id (post_id)
//                );";
//
//            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//            dbDelta($sql);
//        }
//    }
//
//    /**
//     * Update database version to 1.1
//     *
//     * @since 1.1.0
//     */
//    private static function updateTo1Dot1()
//    {
//        global $wpdb;
//
//        $commentTable = $wpdb->prefix . self::TABLE_FIRST;
//
//        $sql = "ALTER TABLE " . $commentTable;
//        $sql .= " ADD context TEXT NOT NULL DEFAULT ''";
//        $wpdb->query($sql);
//    }
//
//    /**
//     * Update database version to 1.2
//     *
//     * @since 1.2.0
//     */
//    private static function updateTo1Dot2()
//    {
//        self::createSecondTalble();
//    }
}
