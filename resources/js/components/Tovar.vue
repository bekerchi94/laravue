<template>
<header id="header" style="position:fixed; z-index:25; width:100%;">

<nav class="navbar navbar-expand-lg navbar-dark bg-primare">

<a class="navbar-brand" id="mybr" href="#">

<div class="logo">

<img src="">

</div>

</a>

<form class="form-inline right-20" method="GET" action="">

<input class="form-control light-primary mr-sm-2" id="poisk" name="poisk" type="text" placeholder="Поиск">

<button class="btn my-2 my-sm-0 btn-light-primary " id="poisk">Поиск</button>

</form>

<div class="collapse navbar-collapse" id="navbarColor01">

<ul class="navbar-nav mr-auto" id="navbarColorul">

</ul>

</div>

</nav>

<h1 style="-webkit-text-stroke: 1px #ffffff; font-weight:bold;margin-left:90px;">abbada</h1>
</header>
</template>

<script>
import axios from 'axios';
import r from '../route';


export default{
  data(){
    return{
      tovars:[]
    }
  },
  methods:{
    getTovars(){
     // r("tovars.index");
      axios.get(r("tovars.index"))
      .then((response)=>
      this.tovars=response.data.tovars
      );
      console.log(this.tovars);
    }
  },
    mounted(){
      this.getTovars();
       // console.log('Component mounted.')
    }
}
</script>
