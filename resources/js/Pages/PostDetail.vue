<template>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/">Square One</a>            
            <div v-if="canLogin" class="" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-if="$page.props.user" >
                        <a class="nav-link" href="/dashboard">
                            Dashboard
                        </a>
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
    <!-- Page Header -->
    <header class="masthead background-image">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
                <h1>Square One</h1>
                <span class="subheading">Blog website</span>
            </div>
            </div>
        </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                <h2 class="post-title">
                {{ post.title }}
                </h2>
                <h3 class="post-subtitle">
                {{ post.text }}
                </h3>
            <p class="post-meta">Posted by
                {{ post.user }} on
                {{ moment( post.created_at ).format("DD MMMM, YYYY")  }}</p>
            </div>
            <hr>
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
    .background-image{
        background-image: url('/assets/images/bg-1.jpg')
    }

    h3{
        font-size: 15px;
        font-weight: 500;
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
            post: Array
        }        
    }
</script>
