<template>
    <div class="container">

        <div class="row pt-5">
            <div class="col-lg-8 d-flex">
                <img src="https://sales-commssion-cms.test/assets/images/logo.png">
            </div>

            <div class="col-lg-4 dropdown">
                <button class="btn btn-secondary dropdown-toggle float-right align-middle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sales Agent
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#" @click.prevent="logout">Logout</a>
                </div>
            </div>
        </div>
        
        <br><br>

        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Total Commision</h5>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Advanced Paid Commission</h5>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Remaining Commision Payable</h5>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="row pt-5">

            <div class="col-lg-12 d-flex justify-content-end pb-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".create-item">
                    Add Sale <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
           
            <div class="col-lg-12 d-flex justify-content-center">
               
                <table class="table table-hover table-wrapper">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Date</th>
                          <th scope="col">Client Name</th>
                          <th scope="col">Carrier</th>
                          <th scope="col">Policy Number</th>
                          <th scope="col">Policy Type</th>
                          <th scope="col">Policy Amount</th>
                          <th scope="col">Annual Premium</th>
                          <th scope="col">Monthly Premium</th>
                          <th scope="col">Commision Amount</th>
                          <th scope="col">Action</th>
                        </tr>
                    </thead>
                    
                    <div v-if="!items.length" class="alert alert-danger text-center" role="alert">
                        No Record <i class="fa fa-frown-o" aria-hidden="true"></i>
                    </div>

                    <tbody v-else>
                        <tr>
                          <th scope="row">1</th>
                          <td>10-90-2992</td>
                          <td>Mark</td>
                          <td>Random</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>10-90-2992</td>
                          <td>Mark</td>
                          <td>Random</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>10-90-2992</td>
                          <td>Mark</td>
                          <td>Random</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>10-90-2992</td>
                          <td>Mark</td>
                          <td>Random</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <th scope="row">1</th>
                          <td>10-90-2992</td>
                          <td>Mark</td>
                          <td>Random</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                          <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div v-for="item in items" class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="card-title">{{ item.title }}</h4>
                        <p class="card-text">{{ item.description }}</p>
                        <button type="button" class="btn btn-primary" @click.prevent="editItem( item )" ><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger" @click.prevent="deleteItem( item )"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>

            <!-- Create Item Modal -->
            <div class="modal fade create-item" id="create-item" tabindex="-1" role="dialog" aria-labelledby="create-item" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Sale</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" enctype="multipart/form-data" @submit.prevent="createItem">
                            <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Date</label>
                                                <input type="date" class="form-control" id="title" placeholder="Enter title" v-model="newItem.date">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="description">Client Name</label>
                                                <input type="text" class="form-control" placeholder="Client Name" v-model="newItem.client_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Carrier</label>
                                                <input type="text" class="form-control" id="title" placeholder="Carrier" v-model="newItem.carrier">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="description">Policy Name</label>
                                                <input type="text" class="form-control" placeholder="Policy Name" v-model="newItem.policy_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Policy Type</label>
                                                <input type="text" class="form-control" id="title" placeholder="Policy Type" v-model="newItem.policy_type">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="description">Policy Amount</label>
                                                <input type="text" class="form-control" placeholder="Policy Amount" v-model="newItem.policy_amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Annual Premium</label>
                                                <input type="text" class="form-control" id="title" placeholder="Annual Premium" v-model="newItem.annual_premium">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="description">Monthly Premium</label>
                                                <input type="text" class="form-control" placeholder="Monthly Premium" v-model="newItem.monthyl_premium">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="title">Commision Amount</label>
                                                <input type="text" class="form-control" id="title" placeholder="Commission Amount" v-model="newItem.commision_amount">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Eit item Modal -->
            <div class="modal fade edit-item" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="edit-item" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Sale</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" enctype="multipart/form-data" @submit.prevent="updateItem( fillItem.id )">
                            <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="title">Date</label>
                                                <input type="text" class="form-control" id="title" placeholder="Enter title" v-model="newItem.date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="description">Client Name</label>
                                                <input type="text" class="form-control" placeholder="Enter title" v-model="newItem.client_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="title">Carrier</label>
                                                <input type="text" class="form-control" id="title" placeholder="Enter title" v-model="newItem.carrier">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="description">Policy Name</label>
                                                <input type="text" class="form-control" placeholder="Enter title" v-model="newItem.policy_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="title">Policy Type</label>
                                                <input type="text" class="form-control" id="title" placeholder="Enter title" v-model="newItem.policy_type">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="description">Policy Amount</label>
                                                <input type="text" class="form-control" placeholder="Enter title" v-model="newItem.policy_amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="title">Annual Premium</label>
                                                <input type="text" class="form-control" id="title" placeholder="Enter title" v-model="newItem.annual_premium">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="description">Monthly Premium</label>
                                                <input type="text" class="form-control" placeholder="Enter title" v-model="newItem.monthyl_premium">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="title">Commision Amount</label>
                                                <input type="text" class="form-control" id="title" placeholder="Enter title" v-model="newItem.commision_amount">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
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
            this.getItems();
        },
        data: () => ({
            items: [],
            newItem: { 
                'date': '', 'client_name': '', 'carrier': '', 'policy_number': ''
                , 'policy_type': '', 'policy_amount': '', 'annual_premium': '', 'monthly_premium': ''
                , 'commision_amount': ''
            },
            fillItem: { 'date': '', 'client_name': '', 'carrier': '', 'policy_number': ''
                , 'policy_type': '', 'policy_amount': '', 'annual_premium': '', 'monthly_premium': ''
                , 'commision_amount': '', 'id': ''}
        }),
        methods: {
            getItems() {
                axios.get( 'vue-items' ).then( response => {
                    let answer = response.data;
                    this.items = answer.sales;
                })
            },
            createItem() {
                let input = this.newItem;

                axios.post('vue-items', input).then( (response) => {

                    this.items.push(response.data);
                    this.newItem = {'date': '', 'client_name': '', 'carrier': '', 'policy_number': ''
                        , 'policy_type': '', 'policy_amount': '', 'annual_premium': '', 'monthly_premium': ''
                        , 'commision_amount': ''};
                    $('#create-item').modal('hide');

                }).catch( (error) => {
                    console.log( error.response.data )
                })
            },
            editItem( item ) {
                let edit = this.fillItem;

                edit.title = item.title;
                edit.description = item.description;
                edit.id = item.id;

                $("#edit-item").modal('show');
            },
            updateItem( id ){
                let input = this.fillItem;

                axios.put('vue-items/' + id, input).then( (response)=> {

                    this.getItems();
                    this.fillItem = {'title': '', 'description': '', 'id': ''};
                    $('#edit-item').modal('hide');

                }).catch( (error)=> {
                    console.log( error.response.data )
                })
            },
            deleteItem( item ) {
                axios.delete('vue-items/' + item.id).then( (response) => {
                    this.getItems();
                });
            },
            logout(){
                axios.post('/logout').then( (response) => {
                    window.location.href = '/login';
                });
            }
        }
    }
</script>