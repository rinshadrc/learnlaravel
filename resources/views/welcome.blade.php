<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Todo App</title>
    <style>
      /* Example styles.css */

        body {
            padding-top: 70px;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        } 
        

        .todo-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px; /* Adjust this value to increase or decrease the width */
            margin: 0 auto; /* Center the container */
        }

        h1 {
            color: #333;
        }

        form {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 60%;
        }

        button {
            padding: 8px 12px;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
        }
        button.edit-btn {
            background-color: #3498db;
            color: #fff;
        }

        button.delete-btn {
            background-color: #e74c3c;
            color: #fff;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #fff;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

    </style>
</head>
<body>

    <div class="todo-container">

        <h1 >Todo App</h1>

        <!-- Todo Form -->

        <form id="todo-form">
            <input type="text" id="task" placeholder="Add a new task" name="task" required>
            <button type="submit">Add</button>
        </form>

        <!-- Todo List -->

        <ul id="todo-list">
          <li>
                <span>Example Task</span>
                <div class="buttons">
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </div>
            </li>
         

        </ul>
    </div>

</body>
</html>
