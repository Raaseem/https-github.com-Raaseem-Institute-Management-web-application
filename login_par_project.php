<?php

		include('connect_project.php');
		
		   if (isset($_POST['login_parent'])) {

                function clean($str) {
                    $str = @trim($str);
                    if (get_magic_quotes_gpc()) {
                        $str = stripslashes($str);
                    }
                    return mysql_real_escape_string($str);
                }

                $username = clean($_POST['username']);
                $password = clean($_POST['password']);

                $query = mysql_query("select * from parent where username='$username' and password='$password'") or die(mysql_error());
                $count = mysql_num_rows($query);
                $row = mysql_fetch_array($query);


                if ($count > 0) {
                    session_start();
                    session_regenerate_id();
					$_SESSION['pid'] = $row['username'];
					$_SESSION['fname'] = $row['par_fname'];
					$_SESSION['lname'] = $row['par_lname'];
                    header('location:parent_home_project.php');
                    session_write_close();
                    exit();
                } else {
                    header('location:error_login_project.php');
				
                }
            }
            ?>