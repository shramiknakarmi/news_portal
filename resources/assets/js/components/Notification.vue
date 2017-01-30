<!--<template>
    <div>
        <header-component/>
        <div>this is template body</div>
        <other-component/>
    </div>
</template>
<style>
    body{
        background-color:#ff0000;
    }
</style>
<script>
    import HeaderComponent from './components/header.vue'
    import OtherComponent from './components/other.vue'
    export default{
        data(){
            return{
                msg:'hello vue'
            }
        },
        components:{
            'other-component':OtherComponent,
            HeaderComponent,
        }
    }
</script>-->

<template>

    <div>



    </div>
    </template>

<script>

    export  default{

    mounted(){
    this.listen()
     },
     props:[id],

     methods:{

       listen(){

       Echo.private('App.User'+this.id)
         .notification((notification)=>{
           alert('new notification)
           console.log(notification)

       })

       }
     }

    }
    </script>
