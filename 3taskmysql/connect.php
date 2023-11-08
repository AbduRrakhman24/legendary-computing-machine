<?php

return mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'id_coding');

if (mysqli_connect_errno()){
    echo 'Failed', mysqli_connect_error();
    exit();
};

