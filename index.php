<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
</head>
<body>
    <h1>Task Manager</h1>

    <form action="add_task.php" method="post">
        <label for="task_name">Task Name:</label>
        <input type="text" name="task_name" required>
        
        <label for="task_description">Task Description:</label>
        <textarea name="task_description"></textarea>

        <button type="submit">Add Task</button>
    </form>

    <h2>Task List</h2>
    <?php include 'get_tasks.php'; ?>
</body>
</html>
