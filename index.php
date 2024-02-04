<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Task Manager</h1>
    
        <form action="add_task.php" method="post">
            <label for="task_name">Task Name:</label>
            <input type="text" name="task_name" required>
            
            <label for="task_description">Task Description:</label>
            <textarea name="task_description"></textarea>
    
            <button type="submit">Add Task</button>
        </form>
        <h2 class="mt-4">Task List</h2>
        <?php include 'get_tasks.php'; ?>
    </div>
</body>
</html>
