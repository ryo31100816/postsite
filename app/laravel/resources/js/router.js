import Router from 'vue-router'

import TaskListComponent from './components/TaskListComponent.vue'
import TaskCreateComponent from "./components/TaskCreateComponent.vue"
import TaskShowComponent from "./components/TaskShowComponent.vue"
import TaskEditComponent from "./components/TaskEditComponent.vue"

export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/spa',
            name: 'task.list',
            component: TaskListComponent
        },
        {
            path: '/spa/:taskId',
            name: 'task.show',
            component: TaskShowComponent,
            props: true
        },
        {
            path: '/spa/create',
            name: 'task.create',
            component: TaskCreateComponent
        },
        {
            path: '/spa/:taskId/edit',
            name: 'task.edit',
            component: TaskEditComponent,
            props: true
        },
    ]
});