<?php
class Comment extends Model{

    public function getUserComments($pID){

        $sql = 'SELECT c.commentID, c.uID, c.commentText, c.date, c.postID, u.first_name, u.last_name 
                FROM comments c 
                INNER JOIN users u on c.uID = u.uID 
                WHERE c.postID = ?
                ORDER BY c.date DESC';

        $results = $this->db->execute($sql, $pID);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
    }

    public function saveComment($data){

        $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'Comment added.';
        return $message;
        
    }
    
    public function deleteComment($data){
        $sql='DELETE FROM comments WHERE commentID = ?';
        $this->db->execute($sql,$data);
        $message = 'Comment deleted.';
        return $message;
    
    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post updated.";
        return $message;
    }
}