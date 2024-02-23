document.addEventListener('DOMContentLoaded', function() {
    const taskInput = document.getElementById('taskInput');
    const addTaskBtn = document.getElementById('addTaskBtn');
    const taskList = document.getElementById('taskList');
  
    addTaskBtn.addEventListener('click', function() {
      const taskText = taskInput.value.trim();
      if (taskText === '') return;
  
      const task = createTaskElement(taskText);
      taskList.appendChild(task);
      taskInput.value = '';
    });
  
    function createTaskElement(taskText) {
      const li = document.createElement('li');
      const checkbox = document.createElement('input');
      checkbox.type = 'checkbox';
      const span = document.createElement('span');
      span.textContent = taskText;
      span.classList.add('task-name');
      const deleteButton = document.createElement('button');
      deleteButton.textContent = 'Delete';
      li.appendChild(checkbox);
      li.appendChild(span);
      li.appendChild(deleteButton);
  
      deleteButton.addEventListener('click', function() {
        li.remove();
      });
      
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          li.classList.add('completed');
        } else {
          li.classList.remove('completed');
        }
      });
      return li;
    }
  });