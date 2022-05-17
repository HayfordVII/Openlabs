<?php

function profileUpdate($conn, $bio, $git_link, $linkedin_link, $telegram_link) {
    $sql = "INSERT INTO profiles (bio, git_link, linkedin_link, telegram_link) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../home.php?error=stmtfailed");
        exit();
    }


    
    mysqli_stmt_bind_param($stmt, "ssss", $bio, $git_link, $linkedin_link, $telegram_link);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../home.php?error=none"); 
    exit();
}