<template>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">Square One</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div v-if="canLogin" class="" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-if="$page.props.user" >
                        <inertia-link href="/" class="nav-link">
                            Home
                        </inertia-link>
                    </li>
                    <template v-else>
                        <li class="nav-item">
                            <inertia-link :href="route('login')" class="nav-link">                    
                                Log in
                            </inertia-link>
                        </li>
                        <li class="nav-item">
                            <inertia-link v-if="canRegister" :href="route('register')" class="nav-link">
                                Register                      
                            </inertia-link>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container-lg">
        <div class="row">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8"><h2>My blogs</h2></div>
                            <div class="col-sm-4">
                                <button @click="addPost()" type="button" class="btn-info add-new"><i class="icon-plus"></i> Add New</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:20%">Title</th>
                                <th style="width:50%">Text</th>
                                <th style="width:15%">Date</th>
                                <th style="width:15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="post in posts">
                                <td>{{ post.title }}</td>
                                <td>{{post.text}}</td>
                                <td>{{ moment(post.created_at).format("DD-MM-YYYY")  }}</td>
                                <td>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="icon-trash"></i></a>
                                </td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>  
    <!-- Footer -->
    <footer>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">                
                <li class="list-inline-item">
                <a href="https://github.com/softon15/square/tree/master">
                    <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="icon-github icon-2x"></i>
                    </span>
                </a>
                </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Marc Ibi 2021</p>
            </div>
        </div>
        </div>
    </footer>
</template>

<style scoped>
    .navbar{
        position: relative !important;
        background-color: grey !important;
    }

    td{
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        text-align: center;
    }

    body {
        color: #404E67;
        background: #F5F7FA;
        font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
        width: 90%;
        margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }
    .table-title .add-new i {
        margin-right: 4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }

    .height{
        height: 250px;
    }

    .text-overflow{
        height: 160px;
        text-overflow: ellipsis;
        overflow: hidden;
        margin-bottom: 15px;
    }

    .margins{
        margin: 3rem;
        margin-bottom: 30px;
    }

    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>



<script>
    import moment from "moment";
    export default {
        data() {
            return{
                moment: moment
            }
        },
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            posts: Array
        }
    }
</script>
