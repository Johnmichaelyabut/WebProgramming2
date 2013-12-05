<?php
/**
 * Filename: MessageDAO.php (Data Access Object)
 * MessageDAO class for the Guestbook
 */
class MessageDAO {

    /**
     * @param Message object
     * @return Boolean is the message added to messages table or not
     */
    public static function createMessage($_message, $_email, $_name) {
        // Execute SQL query to INSERT into messages table
        $sql = mysql_query("INSERT INTO message(name, email, message, date_posted, is_approved) VALUES('$_name', '$_email', '$_message', current_date, 'N')");
        return $sql;
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function getMessage($id) {
        // Execute SQL to fetch message based on ID
        $sql = mysql_query("SELECT * FROM message WHERE id = $id");
        return $sql;
    }

    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
        // Execute SQL to fetch all messages
        $query = "SELECT * FROM message";
        $result = mysql_query($query);
        if(mysql_num_rows($result) > 0){
            $array = array();
            while($row = mysql_fetch_assoc($result)){
                $array[] = $row;
            }
        }
        return $array;
    }

    /**
     * @param Message object
     * @return Boolean is the message updated or not
     */
    public static function updateMessage($message, $name, $email) {
        // Execute SQL to update the message
        $sql = mysql_query("UPDATE message SET name = '$name', email = '$email', message = '$message', date_posted = current_date WHERE id = $id");
        return $sql;
    }

    /**
     * @param Integer ID number of message
     * @return Message object
     */
    public static function deleteMessage($id) {
        // Execute SQL to delete the message based on ID
        $sql = "DELETE FROM message where id = {$id}";
        $result = mysql_query($sql);
        return $result;
    }

    /**
     * Set is_approved to 'Y'
     * @param Integer id number
     * @return Boolean
     */
    public static function approveMessage($id) {
         // Execute SQL to approving the message based on ID
        $sql = mysql_query("UPDATE message SET is_approved = 'Y' where id = $id");
        return $sql;
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
        // Execute SQL to rejecting the message based on ID
        $sql = mysql_query("UPDATE message SET is_approved = 'N' where id = {$id}");
        return $sql;
    }
}

?>