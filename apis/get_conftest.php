<?php
include('../include/phpAes.inc.php');
$aes = new phpAes("MK2X82eL6jkKbzvlJU1CMR6rcKO+SBhmbPOmFD/2Mxw=");  
$res="tTw8kaxhGlGSefgDVtm2FfxeGZxTeyuGMojqPXuaXYf/yxI2MNUi2h0Qf8atbi4XJ6JioWbuawLEPO7h42KpFSpYlekCwjLU6YWhU98thYyua6fBFwaF2NtJ/XesPaHv8a2LQoFVdOPqC3pbwEPFSXUMeQ3PxyctvpzGiUH4qovzoar3NZGmepDIRu9qNvutK89dczYlhY0rF7OpIXu+OpEayb2OdqdXibbqWBqWSxxzErIFCzR3Ap1XRvIRG3DcuJ75zhzT6jJaDaK63DkarzXVbMTnOHj5Dx0dfvFLzEO5jReH1GviLSDO+sgWuCeLIn1L6L4/ki3fNYIXfiUEkacC1x4/b4aK8qMFer2Af6HtNzSIk0vUEGx6VzWv98qfGb9tDn8N8RakffDw2FkRAvaQX2OsI9NmVAMEYCb1cg8j0hKmpn8H1ByfzXaQxbCinePFt+TsrrZi5hKaHnk2UM5aeXVUPkW9nUA/bsknDONVpYU9ohz0tz+tWTVhA9IC1a6gXlaOLrEQ7sI8pR4VDoOa3gBxkITk3/kw0iW8k/tPjYywDNXkUONB7MBc+xL/dsF5Msiodx4DgoeWPavPCuNOJjcRh2CiUwntUUigiCnzoar3NZGmepDIRu9qNvutH+xu6fIdNmgbWO3u76ZWOfw11r/++BSgGaj2PxrJiZSQI+aiBaT/ahqIIGnHazt+WYwCe4jI8+VaoRAPXzV3IH2I7fbyjswO1lLvQVQ/G6ifJ4ZL+157ELm3uktDS5mP3TW7IK9GQ3n1AulDbFxmHcpUNfQUTtX9B49o+tWIincNOPO/oXNIZrnwYqMPKuBQJ3hMPUeGrZMaYmRtsWlNO0/xniX2L7rVEorGpyDtsb6FfHDTpZQ0j6xL3ZemXjzsATH6WNtJ3rYptQ6Mvq+tmQ==";
$cc = $aes->decrypt(($res)); 
print_r(json_decode($cc));