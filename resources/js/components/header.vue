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
                    <span id="Unams">Алекс</span>
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
            <button class="btn btn-outline-light my-2 my-sm-0"><i class="fa fa-sign-in mr-3"></i>войти</button>
        </div>
    </nav>

</template>

<script>
export default {
name: "header",
    mounted() {
        console.log('Component mounted+++++++++++.')
    }
}
</script>

<style scoped>

</style>
