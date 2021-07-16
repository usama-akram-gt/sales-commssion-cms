<template>
    <div class="container">

        <div class="row pt-5">
            <div class="col-lg-8 d-flex">
                <img src="https://sales-commssion-cms.test/assets/images/logo.png">
            </div>

            <div class="col-lg-4 dropdown">
                <button class="btn btn-secondary dropdown-toggle float-right align-middle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Manager
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#" @click.prevent="logout">Logout</a>
                </div>
            </div>
        </div>
     
    </div>
</template>

<style scoped>
    .table-wrapper {
        max-height: 200px;
        overflow: auto;
        display:inline-block;
    }    
</style>


<script>
    export default {
        mounted() {

        },
        data: () => ({
            
        }),
        methods: {
            logout(){
                axios.post('/logout').then( (response) => {
                    window.location.href = '/login';
                });
            }
        }
    }
</script>