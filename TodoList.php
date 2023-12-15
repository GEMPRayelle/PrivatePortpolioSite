<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/sidebar.css">
    <link rel="stylesheet" href="CSS/sidebarTop.css">
    <link rel="stylesheet" href="CSS/Todo.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    
    <?php include "header.php" ?>

    
    
        <div class="app">
            <h1>Todo List</h1>
            <input type="text" class="todo-input" placeholder="아무거나 쓰세요">
            <div class="todos">
                <div class="uncompleted-todos"></div>
                <!--
                <div class="todo-item">
                    <span>
                        <input type="checkbox" name="" id=""> Drink water
                    </span>
                    <a href="#">
                        <i class='bx bx-x'></i>
                    </a>
                </div>
                <div class="todo-item">
                    <span>
                        <input type="checkbox" name="" id=""> Drink water
                    </span>
                    <a href="">
                        <i class='bx bx-x'></i>
                    </a>
                </div>
                -->
            </div>
            <div class="completed-todos">
                <!--<div class="completed-title">Completed (1/3)</div>
                <div class="todo-item">
                    <span>
                        <input type="checkbox" name="" id=""> Drink water
                    </span>
                    <a href="">
                        <i class='bx bx-x'></i>
                    </a>
                </div>-->
            </div>
        </div>

    
    <script src="JS/Todo.js"></script>
    <script src="JS/Scroll.js"></script>
    <script src="JS/SideBar.js"></script>
</body>
</html>