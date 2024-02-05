<?php
include 'config.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        $taskColor = $row['task_col'];
        echo "<li class='task-{$taskColor}'><h4>{$row['task_name']}</h4> <p>{$row['task_description']}</p> <p>({$row['created_at']})</p>";
        echo "<form action='delete_task.php' method='POST' style='display:inline;'>";
        echo "<input type='hidden' name='task_id' value='{$row['id']}'>";
        echo "<button class='task-btn' type='submit'>Delete</button>";
        echo "</form>";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "No tasks found.";
}

$conn->close();
?>
