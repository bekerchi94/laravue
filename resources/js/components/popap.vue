<template>
    <div v-if="phlash" id="fixedcont" class="iactive">
        <center v-if="loginfrm">
            <div class="login">
                <h3>Вход и регистрация</h3>
                <h5>по номеру телефона</h5>
                <span v-on:click="loginfrmx" class="im-x inx"><i class="fa fa-times"></i> <span class="tt">закрыть</span></span>
                <form class="inf" action="#">
                    <label for="phone" class="control-label inl">номер телефона</label>
                    <div class="inner-addon left-addon ind">
                        <i class="fa fa-phone"></i>
                        <input type="text" id="vhphone" value="+7" class="form-control inin">
                    </div>
                    <div v-if="loginfrmkods" id="kods" >
                        <label for="login" class="control-label inl">код из смс</label>
                        <div class="inner-addon left-addon ind">
                            <i class="fa fa-commenting-o"></i>
                            <input type="text" id="vhkod" class="form-control inin">
                        </div>

                    </div>
                    <div v-if="loginfrmimya" id="imya" >
                        <label for="login" class="control-label inl">Имя пользователя:</label>
                        <div class="inner-addon left-addon ind">
                            <i class="fa fa-user"></i>
                            <input type="text" id="nameu" class="form-control inin">
                        </div>

                    </div>
                    <button id="dalee" v-on:click="loginfrmdalee" class="btn btn-outline-info btn-block inb">Продолжить</button>
                    <div id="nazad"></div>
                </form>
            </div>
        </center>


    </div>

</template>

<script>
export default {
    name: "popap"
}
</script>

<style scoped>

</style>
