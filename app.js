document.addEventListener('DOMContentLoaded',function(){
    displayTasks();
});

function displayTasks(){
    const todoList = document.getElementById('list-data');
    todoList.innerHTML = '';

    fetch('backend.php').then(response => response.json())
    .then(data => {
        data.forEach(tasks => {
            console.log(test)
        })
    })


    // fetch('backend.php')
    // .then(response => response.json())
    // .then(data => {
    //     data.forEach(tasks => {
            // const cardList = document.createElement('div');
            // cardList.classList.add('card-list');
            // const listArea = document.createElement('div');
            // listArea.classList.add('list-area');
            // const listText = document.createElement('p');
            // listText.textContent = tasks.task_name;

            // todoList.appendChild(cardList);
            // cardList.appendChild(listArea);
            // listArea.appendChild(listText);
//         })
//     })
}

function addTask() {
    const taskInput = document.getElementById('task');
    const task = taskInput.value.trim();
    if(task !== ''){
        fetch('backend.php',{
            method: 'post',
            headers: {
                'content-type' : 'application/json',
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