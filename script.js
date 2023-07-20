const {createApp} =Vue;
const app =createApp({
    data(){
        return{
            tasks:[]
        }
    },
    created(){
        axios.get('http://localhost/php-todo-list-json/api/')
        .then(res => {
            this.tasks = res.data;
        });
    }
})
app.mount('#app')