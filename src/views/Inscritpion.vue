<template>
    <div class="bodyF">
        <form method="POST">
            <h1>S'inscrire</h1>
            <div class="social-media">
                <p><fa :icon="['fab', 'google']"/></p>
                <p><fa :icon="['fab', 'facebook']"/></p>
                <p><fa :icon="['fab', 'twitter']"/></p>
            </div>
            <p class="choose-email">ou utiliser mon adresse e-mail :</p>
            
            <div class="inputs">
                <input type="text" v-model="nom" placeholder="Nom" />
                <input type="text" v-model="prenom" placeholder="Prénom" />
                <input type="date" v-model="age" placeholder="Date de naissance" />
                <input type="number" v-model="phone" placeholder="Téléphone" />
                <input type="email" v-model="mail" placeholder="Email" />
                <input type="password" v-model="psswd" placeholder="Mot de passe">
            </div>
            
            <p class="inscription">J'ai déjà un compte ? Je me <a href="/connexion"><span>connecte</span></a>.</p>
            <div align="center">
                <button type="submit">S'inscrire</button>
            </div>
        </form>
    </div>
</template>

<script>
    import axios from "axios";
    export default {
        name: 'inscritpionU',
        components: {
        },
        data() {
            return {
                nom: '',
                prenom: '',
                age: '',
                mail: '',
                psswd: '',
                phone: '',
            }
        },
        methods: {
            sendData(){
                let data = new FormData();

                data.append("nom", this.nom);
                data.append("prenom", this.prenom);
                data.append("age", this.age);
                data.append("mail", this.mail);
                data.append("psswd", this.psswd);
                data.append("phone", this.phone);

                axios
                    .post(
                        "http://localhost/src/php/createUser.php",data
                    )
            }
        },
    }
</script>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    .bodyF{
        display: flex;
        justify-content:center;
        flex-direction: columns;
        align-items: center;
        background-color: #f5f5f5;
        font-family: 'Roboto', sans-serif;
    }
    form {
        margin-top: 20px;
        background-color: #fff;
        padding: 40px 60px;
        border-radius: 10px;
        min-width: 400px;
        margin-bottom: 20px;
    }
    form h1{
        color: #eb7371;
        text-align:center;
    }
    form .social-media{
        margin-top: -10px;
        display: flex;
        flex-wrap:wrap;
        justify-content:center;
    }
    form .social-media p{
        padding: 5px;
        width: 20px;
        margin-left: 10px;
        border-radius: 100%;
        border: 1px solid #545454;
        text-align: center;
        cursor:pointer;
        color: #545454;
    }
    form p.choose-email{
        text-align:center;
    }
    form .inputs {
        display: flex;
        flex-direction: column;
    }
    form .inputs input[type='email'], input[type='password'], input[type='text'], input[type='number'], input[type='date']{
        padding: 15px;
        border:none;
        border-radius: 5px;
        background-color:#f2f2f2;
        outline:none;
        margin-bottom: 15px;
    }
    form p.inscription{
        font-size: 14px;
        margin-bottom: 20px;
        color: #878787;
    }
    form p.inscription span{
        color: #eb7371;
    }
    form p.inscription a{
        text-decoration: none;
        font-weight: bold;
    }
    form button{
        padding: 15px 25px;
        border-radius: 5px;
        border:none;
        font-size: 15px;
        color: #fff;
        background-color: #eb7371;
        outline:none;
        cursor:pointer;
        margin-bottom: 10px;
    }
</style>