<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="title">
                    <h2>Login</h2>
                </div>
                <div class="panel panel-default __card">
                    <div class="panel-body">
                        <form :action="url" @submit.prevent="onSubmit">
                            <div class="form-group">
                                <label for="email" class="label-control __label">Email</label>
                                <input type="email" class="form-control __input" v-model="field.email" id="email" name="email">
                                <span class="help-block __error">
                                    error here bro
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="label-control" v-model="field.password">Password</label>
                                <input type="password" class="form-control __input" v-model="field.password" id="password" name="password">
                                <span class="help-block __success">
                                    this is success bro
                                </span>
                            </div>
                            <!-- <div class="form-group"> -->
                                <button class="btn btn-success __button" :disabled="fieldEmpty">login</button>
                            <!-- </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                csrf: '',
                url: ''+'/login',

                field: {
                    email: '',
                    password: ''
                },

                error: {
                    email: false,
                    password: false
                },

                validated: {
                    email: false,
                    password: false
                }

            }
        },
        mounted(){
            this.csrf = $('meta[name="_token"]').attr('content');
            this.url = $('meta[name="_root"]').attr('content')+'/login';
        },
        methods: {
            onSubmit() {
                console.log(this.$data);
                axios.post('/login',{
                    password: this.field.password,
                    email: this.field.email
                }).then(function(response){
                    console.log(response.data)
                }).catch(function(response){
                    console.log(response.response)
                });
            }
        },
        computed: {
            fieldEmpty() {
                if(this.field.email != '' && this.field.password != '') {
                    return false
                } else {
                    return true
                }
            }
        }
    }
</script>
<style scoped>
    .title > h4{
        color:crimson;
    }
</style>
