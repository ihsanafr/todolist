<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    

    <style>
        * {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .hero {
            width: 100vw;
            height: 100vh;
            display: flex;
            background: url(bg2.png);
            background-size: cover;
            justify-content: center;
            align-items: center;
        }

        .card-todo {
            width: 65vw;
            height: 70vh;
            background: rgba(255, 255, 255, 0.26);
            border-radius: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
            overflow-y: hidden;
        }

        .area-atas {
            width: 65vw;
            height: 15vh;
            display: flex;
        }

        .area-judul {
            width: 20vw;
            height: 15vh;
            display: flex;
            align-items: center;
        }

        .teks-judul {
            display: flex;
            margin-left: 60px;
            margin-right: 10px;
            color: rgba(117, 127, 255, 1);
            font-size: 3em;
            font-family: Poppins;
            font-weight: 800;
        }

        .area-tambah {
            width: 45vw;
            height: 15vh;
            display: flex;
            align-items: center;
            justify-content: end;
        }

        .input-task {
            width: 30vw;
            display: flex;
            height: 5vh;
            background: none;
            color: rgba(117, 127, 255, 1);
            border: 4px solid rgba(117, 127, 255, 1);
            padding: 10px;
            font-size: 1.5em;
            border-radius: 100px;
            padding-left: 20px;
        }

        .btn-task {
            width: 4.5vw;
            height: 8vh;
            font-size: 3em;
            margin-right: 40px;
            margin-left: 10px;
            background: none;
            border-radius: 100px;
            border: 4px solid rgba(117, 127, 255, 1);
            color: rgba(117, 127, 255, 1);
            transition: 0.4s;
        }

        .btn-task:hover{
            background: rgba(117, 127, 255, 0.23);
        }

        .area-kartu {
            width: 65vw;
            white-space: nowrap;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .list-kartu{
            margin-left: 20px;
            height: 50vh ;
            padding-bottom: 20px;
        }



        .todo-card {
            background: none;
            border: 3px solid rgba(117, 127, 255, 1);
            
            display: flex;
            flex-direction: column;
            width: 55vw;
            padding: 20px;
            border-radius: 20px;
            margin-top: 10px;
            overflow-y: hidden;
            margin-bottom: 15px;
        }

        ::placeholder{
            color: blue;
        }

        .todo-teks {
            max-width: 50vw;
            color: rgba(117, 127, 255, 1);
            font-family: Poppins;
            font-size: 1.5em;
            font-weight: bold;
        }

        .btn-area{
            margin-top: 10px;
            border: none;
            /* margin-left: 38vw; */
        }

        .btn-check{
            background: rgba(117, 127, 255, 1);
            border: 2px solid rgba(117, 127, 255, 1);
            color: white;
            font-weight: bold;
            padding: 10px 20px 10px 20px;
            border-radius: 20px;
            margin-right: 10px;
            transition: 0.3s;
        }
        .btn-check:hover{
            background: none;
            color: rgba(117, 127, 255, 1)
        }
        .btn-del{
            background: none;
            border: 2px solid rgba(117, 127, 255, 1);
            color: rgba(117, 127, 255, 1);
            font-weight: bold;
            padding: 10px 20px 10px 20px;
            border-radius: 20px;
            transition: 0.3s;
        }
        .btn-del:hover{
            background: rgba(117, 127, 255, 1);
            color: white;
        }
        button{
            border: none;
            background: none;
        }
        .completed {
            color:  rgba(117, 127, 255, 1);
        }
        .completed-card{
            background: rgba(117, 127, 255, 0.23);
        }



        

        @media screen and (max-width: 767px) {
            .area-atas {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 40px;
            }

            .area-judul {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 50vw;
                overflow-y: hidden;
            }

            .teks-judul {
                margin-left: 0;
                font-size: 2em;
            }

            .area-tambah {
                width: 60vw;
                height: 30vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .input-task {
                width: 30vw;
                height: 1.5vh;
                font-size: 0.8em;
                border: 2px solid rgba(117, 127, 255, 1);
            }

            .btn-task {
                font-size: 1em;
                overflow-y: hidden;
                padding-left: 0;
                width: 9vw;
                height: 5vh;
                margin-right: 0;
                border: 2px solid rgba(117, 127, 255, 1);

            }

            .area-kartu{
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .list-kartu{
                height: 45vh;
                margin-left: 0;
            }
            .todo-card{
                border-radius: 20px;
                width: 40vw;
                margin-bottom: 10px ;
                overflow-y: hidden;
            }
            .todo-teks{
                font-size: 0.8em;
            }
            .btn-check{
                font-size: 0.5em;
                padding: 5px 15px 5px 15px;
                margin-right: 2px;
            }
            .btn-del{
                font-size: 0.5em;
                padding: 5px 15px 5px 15px;
            }
            
        }
    </style>
</head>

<body>
    <div class="hero">
        <div class="card-todo">
            <div class="area-atas">
                <div class="area-judul">
                    <div class="teks-judul">
                        <p>TodoList</p>
                    </div>
                </div>
                <div class="area-tambah">
                    <input class="input-task" type="text" id="task"   placeholder="masukan tugas...">
                    <button class="btn-task" onclick="addTask()"><b>+</b></button>
                </div>
            </div>
            <div class="area-kartu" >
                <div class="list-kartu" id="list-data"></div>
            </div>
        </div>
    </div>
    <!-- <script src="app.js"></script> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            displayTasks();
        });

        function displayTasks() {
            const todoList = document.getElementById('list-data');
            todoList.innerHTML = '';

            // fetch('backend.php').then(response => response.json())
            // .then(data => {
            //     data.forEach(tasks => {
            //         console.log(tasks)
            //     })
            // })


            fetch('backend.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(tasks => {
                        const cardList = document.createElement('div');
                        cardList.classList.add('card-list');
                        cardList.className = 'todo-card';
                        const listArea = document.createElement('div');
                        listArea.classList.add('list-area');
                        const listText = document.createElement('p');
                        listText.textContent = tasks.tasks_name;
                        listText.className = 'todo-teks'
                        if (tasks.completed === '1') {
                            listText.classList.add('completed');
                            cardList.classList.add('completed-card');
                        }
                        

                        // button

                        const btnArea = document.createElement('div');
                        btnArea.classList.add('btn-area');

                        const btnCheck = document.createElement('button');
                        btnCheck.innerHTML = `<button onclick="btnCheck(${tasks.id})" class="btn-check">Check</button>`;

                        const btnDelete = document.createElement('button');
                        btnDelete.innerHTML = `<button type="submit" onclick="btnDel(${tasks.id})" class="btn-del">Delete</button>`;


                        todoList.appendChild(cardList);
                        cardList.appendChild(listArea);
                        listArea.appendChild(listText);
                        cardList.appendChild(btnArea);
                        btnArea.appendChild(btnCheck);
                        btnArea.appendChild(btnDelete);
                    })
                })
        }
        function addTask() {
            const taskInput = document.getElementById('task');
            const task = taskInput.value.trim();
            if (task !== '') {
                fetch('backend.php', {
                        method: 'post',
                        headers: {
                            'content-type': 'application/json',
                        },
                        body: JSON.stringify({
                            task
                        }),
                    })
                    .then(() => {
                        taskInput.value = '';
                        displayTasks();
                    });
            }
        }
        // function btnDel(id) {
        //     fetch(`backend.php?id=${id}`,{
        //         method:'DELETE',
        //     })
        //     .then(()=> displayTasks())
        // }

        function btnCheck(id) {
            fetch(`backend.php?id=${id}`, {
                    method: 'PUT',
                })
                .then(() => displayTasks());
        }

        function btnDel(id) {
            fetch(`backend.php?id=${id}`, {
                    method: 'DELETE',
                })
                .then(() => displayTasks());
        }
    </script>
</body>

</html>