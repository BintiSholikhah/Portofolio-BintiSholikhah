<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $noWa = $_POST['noWa'];
        
        header("location: https://api.whatsapp.com/send?phone=$noWa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DNumber:%20$number%20%0DSubject:%20$subject%20%0DMessage:%20$message%20%0D");
    }
    else{
        echo "
        <script>
            window.location=history.go(-1);
        </script>
    ";
    }
?>