<?php

/**
 * Predefined logic hooks
 * after_ui_frame
 * after_ui_footer
 * after_save
 * before_save
 * before_retrieve
 * after_retrieve
 * process_record
 * before_delete
 * after_delete
 * before_restore
 * after_restore
 * server_roundtrip
 * before_logout
 * after_logout
 * after_login
 * login_failed
 *
 */

abstract class SugarLogicHook
{
    public function after_ui_frame(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_ui_footer(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_save(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function before_save(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function before_retrieve(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_retrieve(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function process_record(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function before_delete(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_delete(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function before_restore(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function server_roundtrip(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function before_logout(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_logout(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_login(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function login_failed(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_relationship_add(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }

    public function after_relationship_delete(&$bean, $arguments)
    {
        /**
         * Override Function To Have this Run
         */
        return true;
    }
}