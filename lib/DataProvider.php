<?php
    class DataProvider
    {
        public static function ExecuteQuery($sql)
        {
            $connection = mysqli_connect('localhost','root','','dbhunter') or
                die ("couldn't connect to localhost");
                mysqli_query($connection, $sql);
                $result = mysqli_query($connection, $sql);
                mysqli_close($connection);
                return $result;
        }
        public static function ChangeURL($path)
        {
            echo '<script type = "text/javascript">';
            echo 'location = "'.$path.'";';
            echo '</script>';
        }
    }
?>