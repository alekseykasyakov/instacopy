<template>
    <div>
        <button class="btn btn-primary btn-sm" @click="followUser"><strong>Стежити</strong></button>
    </div>
</template>
<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            followUser(){
                axios.post('/follow/' + this.userId)
                .then(response => {
                    alert(response.data);
                });
            }
        }
    }
</script>
