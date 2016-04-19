<?php

use yii\db\Migration;

class m160419_112651_create_INSERT_INTO_tables extends Migration
{
    public function safeUp()
    {
        $this->execute("
INSERT INTO turizm.auth_item (name, type, description, rule_name, data, created_at, updated_at) VALUES ('/*', 2, null, null, null, null, null);
INSERT INTO turizm.auth_item (name, type, description, rule_name, data, created_at, updated_at) VALUES ('/admin/*', 2, null, null, null, null, null);
INSERT INTO turizm.auth_item (name, type, description, rule_name, data, created_at, updated_at) VALUES ('permission_admin', 2, 'permission to add/setup/modify permessions, roles', null, null, null, null);
INSERT INTO turizm.auth_item (name, type, description, rule_name, data, created_at, updated_at) VALUES ('sysadmin', 1, null, null, null, null, null);
INSERT INTO turizm.auth_assignment (item_name, user_id, created_at) VALUES ('sysadmin', '1', null);
INSERT INTO turizm.auth_item_child (parent, child) VALUES ('sysadmin', '/*');
INSERT INTO turizm.auth_item_child (parent, child) VALUES ('sysadmin', '/admin/*');
INSERT INTO turizm.auth_item_child (parent, child) VALUES ('sysadmin', 'permission_admin');
INSERT INTO turizm.table_user (username, name, surname, password, salt, access_token, create_date) VALUES ('mashimp@mail.ru', 'admin', 'qwerty', '5c39bbf84b9195ac779e12f489aa298e7f9be831dd542670f9ef2cd6e48b25ea3812eb4f653bdfed1a8edc599d32327f01155259742c66cee04136eacb86baa1', '0c5d62b24fbb75d9bc964df1a63d2797c51ca04fce4675a4f9efa2faf73066ea7b56e7cc011daab727b7c3fb52e4e891ebb3722bffb31d3805c9d5662e70fd29', null, '2016-04-13 13:18:59');
         ");
    }

    public function safeDown()
    {
        $this->execute("
            DELETE FROM turizm.auth_item; 
            DELETE FROM turizm.auth_assignment; 
            DELETE FROM turizm.auth_item_child;
            DELETE FROM turizm.table_user WHERE username = 'mashimp@mail.ru';
         ");
    }
}
