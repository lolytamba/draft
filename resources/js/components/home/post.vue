<template>
    <div class="container">
        <form @submit.prevent="addmessage();load = true">
            <div class="field">
                <label class="label">Dari</label>
                <div class="control">
                    <input class="input" v-model="data.dari" type="text" placeholder="Text input">
                </div>
            </div>
            <div class="field">
                <label class="label">Untuk</label>
                <div class="control">
                    <input class="input" v-model="data.untuk" type="text" placeholder="Text input">
                </div>
            </div>

            <div class="field">
            <label class="label">Pesan</label>
                <div class="control">
                    <textarea class="textarea" v-model="data.pesan" placeholder="Textarea"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" :class="{'is-loading':load}">Post</button>
                </div>
                
            </div>
        </form>
    </div>
</template>
<script>
export default {
    data(){
        return{
            data:{
                dari:'',
                untuk: '',
                pesan: ''
            },
            load: false,
        }
    }, 
    methods:{
        addmessage(){
            let uri="/api/draft";
             axios.post(uri,this.data).then((response) => {
                this.load = false;
                this.$router.push({ name: 'LandingHome' })

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

