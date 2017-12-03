<?php

class Comment extends Model {

   function getComments($pID){

    $sql = 'SELECT comments.commentID,comments.commentText, comments.uID, comments.date, users.last_name, users.first_name
    FROM comments, users
    WHERE comments.uID = users.uID
    AND postID = ?
    ORDER BY date DESC';

    $results = $this->db->execute($sql, array($pID));
    while ($row=$results->fetchrow()){
      $comments[] = $row;
        }
        return $comments;
    }

    public function addComment($data){

      $sql='INSERT INTO comments (postID,uID,commentText,date)
      VALUES (?,?,?,now())';
      $this->db->execute($sql,$data);
    }

    public function deleteComment($commentID) {

      $sql = 'DELETE  FROM comments
      WHERE commentID = ?';
      $this->db->execute($sql, $commentID);
    }
	
 }

  ?>
