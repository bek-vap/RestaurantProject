
<?php

function generateGuestId() {
    return bin2hex(random_bytes(16)); // 32 belgili xavfsiz ID
}

?>