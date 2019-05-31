<?php

/**
 * Advanced Security - PHP Register/Login System
 *
 * @author Milos Stojanovic
 * @link   http://mstojanovic.net
 */

/**
 * Comments class.
 */
class ASComment
{
    /**
     * @var ASDatabase
     */
    private $db = null;

    /**
     * @var ASUser
     */
    private $users;

    /**
     * Class constructor
     * @param ASDatabase $db
     * @param ASUser $users
     */
    public function __construct(ASDatabase $db, ASUser $users)
    {
        $this->db = $db;
        $this->users = $users;
    }

    /**
     * Inserts comment into database.
     * @param int $userId Id of user who is posting the comment.
     * @param string $comment Comment text.
     */
    public function insertComment($userId, $comment)
    {
        if ($error = $this->validateComment($comment)) {
            respond(array(
                'errors' => array('comment' => $error)
            ), 422);
        }

        $userInfo = $this->users->getInfo($userId);
        $datetime = date("Y-m-d H:i:s");

        $this->db->insert("as_comments", array(
            "posted_by" => $userId,
            "posted_by_name" => $userInfo['username'],
            "comment" => strip_tags($comment),
            "post_time" => $datetime
        ));

        respond(array(
            "user" => $userInfo['username'],
            "comment" => stripslashes(strip_tags($comment)),
            "postTime" => $datetime
        ));
    }

    /**
     * @param $comment
     * @return mixed|null|string
     */
    private function validateComment($comment)
    {
        return trim($comment) == ""
            ? trans('field_required')
            : null;
    }

    /**
     * Return all comments left by a user.
     * @param int $userId Id of user.
     * @return array Array of all user's comments.
     */
    public function getUserComments($userId)
    {
        return $this->db->select(
            "SELECT * FROM `as_comments` WHERE `posted_by` = :id",
            array("id" => $userId)
        );
    }

    /**
     * Return last $limit (default 7) comments from database.
     * @param int $limit Required number of comments.
     * @return array Array of comments.
     */
    public function getComments($limit = 7)
    {
        $limit = (int) $limit;

        return $this->db->select("SELECT * FROM `as_comments` ORDER BY `post_time` DESC LIMIT $limit");
    }
}
