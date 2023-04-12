const { createApp } = Vue;
createApp({
    data() {
        return {
            todos: [],
            newToDo: ''
        }
    },
    methods: {
        addToDo() {
            const data = {
                newtodo: this.newToDo
            };

            axios
                .post('server.php', data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then((response) => {
                    console.log(response);
                    this.todos = response.data;
                })
        }
    },
    created() {
        axios
            .get('server.php')
            .then((response) => {
                console.log(response);
                this.todos = response.data;
            })
    }
}).mount('#app')
