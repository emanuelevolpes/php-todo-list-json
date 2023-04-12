const { createApp } = Vue;
createApp({
    data() {
        return {
            todos: []
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
