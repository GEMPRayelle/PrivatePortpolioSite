let todoItems = []
const todoInput = document.querySelector('.todo-input')
const completedTodosDiv = document.querySelector('.completed-todos')
const uncompletedTodosDiv = document.querySelector('.uncompleted-todos')

//첫실행시 todo 리스트 가져오기
window.onload = () => {
    let storageTodoItems = localStorage.getItem('todoItems')
    if(storageTodoItems != null){
        todoItems = JSON.parse(storageTodoItems)
    }
    render()
}

//input에 텍스트내용 가져오기 
todoInput.onkeyup = ((e) => {
    let value = e.target.value.replace(/^\s+/,"")
    if(value && e.keyCode === 13){
        //엔터
        addTodo(value)
        todoInput.value = ''
        todoInput.focus()
    }
})

//todo 추가
function addTodo(text){
    todoItems.push({
        id: Date.now(), text, completed: false
    })
    console.log(todoItems)

    saveAndRender()
}

//todo 제거
function reomveTodo(id){
    todoItems = todoItems.filter(todo => todo.id !== Number(id))
    saveAndRender()
}
//완수된일 마크
function markAsCompleted(id){
    todoItems = todoItems.filter(todo => {
        if(todo.id === Number(id)){
            todo.completed = true
        }
        return todo
    })

    saveAndRender()
}
//미완수된일 마크
function markAsUnCompleted(id){
    todoItems = todoItems.filter(todo => {
        if(todo.id === Number(id)){
            todo.completed = false
        }
        return todo
    })
    saveAndRender()
}

//local저장소에 저장
function save(){
    localStorage.setItem('todoItems', JSON.stringify(todoItems))
}
//불러오기
function render(){
    let uncompletedTodos = todoItems.filter(item => !item.completed)
    let completedTodos = todoItems.filter(item => item.completed)

    completedTodosDiv.innerHTML = ''
    uncompletedTodosDiv.innerHTML = ''

    if(uncompletedTodos.length > 0){
        uncompletedTodos.forEach(todo => {
            uncompletedTodosDiv.append(createTodoElement(todo))
        })
    }else{
        uncompletedTodosDiv.innerHTML=`<div class='empty'> 완수하지 않은 과업이 없습니다</div>`
    }

    if(completedTodos.length){
        completedTodosDiv.innerHTML = `<div class='completed-title'>Completed (${completedTodos.length} / ${todoItems.length})</div>`

        completedTodos.forEach(todo => {
            completedTodosDiv.append(createTodoElement(todo))
        })
    }
}

function saveAndRender(){
    save()
    render()
}

//todo item 생산
function createTodoElement(todo){
    //todo 리스트 컨테이너
    const todoDiv = document.createElement('div')
    todoDiv.setAttribute('data-id', todo.id)
    todoDiv.className = 'todo-item'

    //todo 리스트 텍스트
    const todoTextSpan = document.createElement('span')
    todoTextSpan.innerHTML = todo.text

    //리스트 체크박스
    const todoInputCheckbox = document.createElement('input')
    todoInputCheckbox.type = 'checkbox'
    todoInputCheckbox.checked = todo.completed
    todoInputCheckbox.onclick = (e) => {
        let id = e.target.closest('.todo-item').dataset.id
        e.target.checked ? markAsCompleted(id) : markAsUnCompleted(id)
    }
    //리스트 제거용 버튼
    const todoRemoveBtn = document.createElement('a')
    todoRemoveBtn.href = '#'
    todoRemoveBtn.innerHTML = `<i class='bx bx-x'></i>`
    todoRemoveBtn.onclick = (e) => {
        let id = e.target.closest('.todo-item').dataset.id
        reomveTodo(id)
    }

    todoTextSpan.prepend(todoInputCheckbox)
    todoDiv.appendChild(todoTextSpan)
    todoDiv.appendChild(todoRemoveBtn)

    return todoDiv
}