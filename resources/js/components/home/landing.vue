<template>
    <div class="container">
        <div class="columns is-widescreen" v-for="data in datas" :key="data.dari">
            <div class="box" style="width: 100%; margin-bottom: 20px;">
                <article class="media">
                    <figure class="media-left">
                        <p >
                            Dari
                        </p>
                        <p >
                            Untuk
                        </p>
                        <p >
                            Pesan
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>{{data.dari}}</p>
                            <p>{{data.untuk}}</p>
                            <p style="text-align:justify"> {{data.pesan}}</p></div>
                    </div>
                </article>
                </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            datas:[]
        }
    },
    created(){
        this.getData();
    },
    
    methods:{
        getData(){
             let uri="/api/draft";
             axios.get(uri).then((response) => {
                 console.log(response);
                 this.datas = response.data;
            }).catch(error => {
                this.$toast.open({
                    duration: 2000,
                    message: error,
                    position: 'is-bottom',
                    type: 'is-danger',
                    queue: false,
                })
            });
        }
    }
}
</script>

