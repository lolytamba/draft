<template>
   <div class="content" id="homeLayout">  
       <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                    Draft The King Corp
                    <a role="button" class="navbar-burger " :class="{'is-active': burger}" aria-label="menu" aria-expanded="false" @click="activeBurger()">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    </a>
            </div>
            
            <div id="navbarBasicExample" class="navbar-menu " :class="{'is-active': burger}" >
                <div class="navbar-start">
                <router-link :to="{name:'LandingHome'}"  class="navbar-item" :class="{'is-black': burger}">
                    Home
                </router-link>
                <router-link :to="{name: 'PostHome'}"  class="navbar-item" :class="{'is-black': burger}">
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
                year: 2018,
                burger: false,
            }
        },
        methods:{
            activeBurger(){
                if(this.burger == false){
                    this.burger = true;
                }else{
                    this.burger = false;
                }
            }
        }
       
    }
</script>