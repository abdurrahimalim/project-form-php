<?php
function tampilHasil($person) {
    echo '<div class="result">';
    echo '<p>Hi, my name is ' . htmlspecialchars($person->getFullname()) . '</p>';
    echo '<p>Phone Number : ' . htmlspecialchars($person->getPhone()) . '</p>';
    echo '<p>Address : ' . htmlspecialchars($person->getAddress()) . '</p>';
    echo '<a href="index.php">Reset</a>';
    echo '</div>';
}
?>