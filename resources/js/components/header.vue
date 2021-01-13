<template>
       <nav class="navbar navbar-expand-lg navbar-info bg-info">

        <a class="navbar-brand" href="#">Zhumush.ru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">

        </div>

        <div class="pull-right">
            <!-- Example single danger button -->
            <div v-if="idsess>0" id="prof" class="btn-group mr-4">
                <div type="button" class="text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="header-profile" id="Uimg" src="#"/>
                    <span id="Unams">{{ pname }}</span>
                </div>
                <div class="dropdown-menu bg-info">
                    <a class="dropdown-item twh" href="#"><i class="fa fa-bullhorn mr-3"></i>мои обявление</a>
                    <a class="dropdown-item twh" id="sms" href="#"><i class="fa fa-envelope mr-3"></i>сообщение</a>
                    <a class="dropdown-item twh" href="#"><i class="fa fa-heart mr-3"></i>избранные</a>
                    <a class="dropdown-item twh" href="#"><i class="fa fa-credit-card mr-3"></i>кошелек</a>
                    <a class="dropdown-item twh" href="#"><i class="fa fa-stack-2x mr-3"></i>кошелек</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" id="vyhod" href="#"><i class="fa fa-sign-out mr-3"></i>выйти</a>
                </div>
            </div>
            <button class="btn btn-outline-light my-2 my-sm-0"><i class="fa fa-bullhorn mr-3"></i>Подать обявление</button>
            <template v-if="idsess==0">
                <button v-on:click="voiti" class="btn btn-outline-light my-2 my-sm-0"><i class="fa fa-sign-in mr-3"></i>войти</button>
            </template>
        </div>

           <div v-if="log" class="iactive">
            <center>
               <div class="login">
                   <h3>Вход и регистрация</h3>
                   <h5>по email</h5>
                   <span class="im-x inx" @click="zakr()"><i class="fa fa-times"></i><span class="tt">закрыть</span></span>
                   <form class="inf" action="#">
                       <label for="phone" class="control-label inl">email</label>
                       <div class="inner-addon left-addon ind">
                           <i class="fa fa-envelope"></i>
                           <input v-model="pemail" type="text" id="vhphone" class="form-control inin">
                       </div>

                       <div v-if="dalval==1">
                           <label for="vhkod" class="control-label inl">пароль:</label>
                       <div class="inner-addon left-addon ind">
                           <i class="fa fa-commenting-o"></i>
                           <input v-model="ppass" type="password" id="vhkod" class="form-control inin">
                       </div>
                       </div>
                       <div v-if="dalval>1">
                            <label for="nameu" class="control-label inl">Имя пользователя:</label>
                           <p class="text-danger">{{errn}}</p>
                             <div class="inner-addon left-addon ind">
                               <i class="fa fa-user"></i>
                               <input v-model="pname" type="text" id="nameu" class="form-control inin">
                             </div>
                       </div>
                       <div v-if="dalval==3">
                           <label for="pass" class="control-label inl">Придумайте пароль:</label>
                           <div class="inner-addon left-addon ind">
                               <i class="fa fa-user"></i>
                               <input v-model="ppass1" type="password" id="pass" class="form-control inin">
                           </div>
                           <label for="pass2" class="control-label inl">Повторите пароль:</label>
                           <p class="text-danger">{{err}}</p>
                           <div class="inner-addon left-addon ind">
                               <i class="fa fa-user"></i>
                               <input v-model="ppass2" type="password" id="pass2" class="form-control inin">
                           </div>
                       </div>
                       <div id="imya" ></div>
                       <button id="dalee" @click="dalee" class="btn btn-outline-info btn-block inb">{{prod}}</button>
                       <div id="nazad"></div>
                   </form>
               </div>
            </center>
           </div>
       </nav>

</template>

<script>
import axios from 'axios';
import r from '../route';

export default {
    data() {
        return {
            passhash: "",
            log:false,
            pemail:"",
            dalval:0,
            ppass:"",
            pname:"",
            ppass1:"",
            ppass2:"",
            errn:"",
            errp:"",
            idsess:0,
            prod:"продолжить"
        }
    },
    methods:{
        voiti(){
            this.log=true;
        },
        zakr(){
            this.pemail='';
            this.log=false;
            this.log=false;
                this.dalval=0;
                this.ppass="";
                this.pname="";
                this.ppass1="";
                this.ppass2="";
                this.errn="";
                this.errp="";
                this.prod="продолжить";
        },
        dalee(){
            if(this.dalval==3){
                this.prod="сохранить";
                if(this.ppass1==this.ppass2){
                    axios.get(r("users.create")+this.pemail+"/"+this.pname+"/"+this.ppass1)
                        .then((response)=> {
                            this.pname = response.data.username;
                            this.idsess=1;
                            this.log=false;
                            console.log(response.data);
                        });
                }else{
                    this.errp="пароли не совподает!";
                }
            }
            if(this.dalval==2){
                if(this.pname==""){
                    this.errn="Поля не должен быть пустым";
                }else {
                    this.errn="";
                    this.dalval = 3;
                }
            }
            if(this.dalval==1){
                axios.get(r("users.prover")+this.pemail+"/"+this.ppass)
                    .then((response)=> {
                        this.pname=response.data.name;
                        this.idsess=1;
                        this.log=false;
                    });
            }
            if(this.dalval==0){
                axios.get(r("users.index")+this.pemail)
                    .then((response)=> {
                        if(response.data.isset=="false"){
                            this.dalval=2;
                        }
                        else{
                            this.dalval=1;
                            this.prod="войти";
                        }
                    });
            }

        }
    },
    mounted() {
        console.log('Component mounted+++++++++++.')
    }
}
</script>

<style scoped>

</style>
