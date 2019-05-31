<?php

/**
 * Advanced Security - PHP Register/Login System
 *
 * @author Milos Stojanovic
 * @link   http://mstojanovic.net
 */

/**
 * Class ASRole
 * Description: Class for manipulating with user roles.
 */
class ASRole
{
    /**
     * @var ASDatabase Instance of ASDatabase class
     */
    private $db = null;

    /**
     * @var ASValidator Instance of ASValidator class
     */
    private $validator;

    /**
     * Class constructor
     * @param ASDatabase $db
     * @param ASValidator $validator
     */
    public function __construct(ASDatabase $db, ASValidator $validator)
    {
        $this->db = $db;
        $this->validator = $validator;
    }

    /**
     * Get role id of role that have provided role name.
     * @param $name string Role name
     * @return int Role id if role with provided role name exist, null otherwise.
     */
    public function getId($name)
    {
        $result = $this->db->select(
            "SELECT `role_id` FROM `as_user_roles` WHERE `role` = :r",
            array('r' => $name)
        );

        return $result
            ? $result[0]['role_id']
            : null;
    }

    /**
     * Get role name of role with provided id.
     * @param $id int Role id
     * @return string Role Name if role with provided role id exist, null otherwise.
     */
    public function name($id)
    {
        $result = $this->db->select(
            "SELECT `role` FROM `as_user_roles` WHERE `role_id` = :id",
            array( 'id' => $id)
        );

        return $result
            ? $result[0]['role_id']
            : null;
    }

    /**
     * Add new role into db.
     * @param $name string Role name
     */
    public function add($name)
    {
        if ($this->validator->roleExist($name)) {
            respond(array(
                "errors" => array("name" => trans('role_taken'))
            ), 422);
        }

        $this->db->insert(
            "as_user_roles",
            array("role" => strtolower(strip_tags($_POST['role'])))
        );

        respond(array(
            "status" => "success",
            "role_name" => strip_tags($_POST['role']),
            "role_id" => $this->db->lastInsertId()
        ));
    }

    /**
     * Delete role with provided id.
     * @param $id int Role id
     */
    public function delete($id)
    {
        //default user roles can't be deleted
        if (in_array($_POST['roleId'], array(1, 2, 3))) {
            exit();
        }

        $this->db->delete("as_user_roles", "role_id = :id", array( "id" => $id ));

        // Since provided role is deleted, we will
        // update all users who had this role to use
        // default "User" role now.
        $this->db->update(
            "as_users",
            array('user_role' => "1"),
            "user_role = :r",
            array("r" => $id)
        );

        respond(array('status' => 'success'));
    }
}
