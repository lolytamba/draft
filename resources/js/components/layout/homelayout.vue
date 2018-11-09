<template>
   <div class="content" id="homeLayout">  
       <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                    Draft The King Corp
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <router-link :to="{name:'LandingHome'}" class="navbar-item">
                    Home
                </router-link>
                <router-link :to="{name: 'PostHome'}" class="navbar-item">
                    Post
                </router-link>
                </div>
            </div>
            </nav>
         <div id="appPage">
            <main class="pageContent">
            <transition name="fade">
            <router-view></router-view>
            </transition>
            </main>
        </div>
        <div class="footer">
            <hr>
            <p style="text-align: center">Copyright © {{year}} Draft</p>
        </div>
   </div>
</template>
<style>

</style>


<script>
    export default {
        data(){
            return{
                year: 2018
            }
        }
       
    }
</script>