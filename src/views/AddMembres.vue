<template>
    <div class="container">
        <h1>Gestion des membres</h1>
        <form>
            <div class="row mb-3">
                <div class="col">
                    <select v-model="id" class="form-select">
                        <option value="">--Choisir un membre--</option>
                        <option 
                            v-for="(team, index) in this.loadTeam"  :key="index"
                            :value="team.id_team"
                        >
                            {{team.name_team}}
                        </option>
                    </select>
                </div>
                <div class="col">
                    <button v-show="id != ''" @click="delMembre()" type="button" class="btn btn-outline-danger">Supprimer le membre séléctionné</button>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" v-model="name" class="form-control" placeholder="Prénom et Nom">
                </div>
                <div class="col">
                    <input type="text" v-model="role" class="form-control" placeholder="Role">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" v-model="fb" class="form-control" placeholder="Facebook">
                </div>
                <div class="col">
                    <input type="text" v-model="ig" class="form-control" placeholder="Instagram">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" v-model="sc" class="form-control" placeholder="Soundcloud">
                </div>
                <div class="col">
                    <input type="text" v-model="yt" class="form-control" placeholder="Youtube">
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col">
                    <label>Photo :</label>
                    <input type="file" class="form-control" placeholder="Photo">
                </div>
            </div>
            <button type="button" v-show="id == ''" @click="addMembre()" class="btn btn-outline-success mb-3">Ajouter membre</button>
            <button type="button" v-show="id != ''" @click="modifMembre()" class="btn btn-outline-warning mb-3">Modifier membre</button>
        </form>
    </div>
    <!-- <h1>Ajouter Modifier ou supprimer des membres</h1>
    <select v-model="id" name="choiceTeam" id="choiceTeam">
        <option value="">--Choisir un membre--</option>
        <option 
            v-for="(team, index) in this.loadTeam"  :key="index"
            :value="team.id_team"
        >
            {{team.name_team}}
        </option>
    </select>
    <button v-show="id != ''" @click="delMembre()">Supprimer le membre séléctioner</button>
    <div>
        <input type="text" v-model="name" placeholder="Prénom et nom">
        <input type="text" v-model="role" placeholder="Role">
        <input type="file">
    </div>
    <div>
        <input type="text" v-model="fb" placeholder="facebook">
        <input type="text" v-model="ig" placeholder="instagram">
        <input type="text" v-model="sc" placeholder="soundcloud">
        <input type="text" v-model="yt" placeholder="youtube">
    </div>
    <button v-show="id == ''" @click="addMembre()">Ajouter</button>
    <button v-show="id != ''" @click="modifMembre()">Modifier</button> -->
</template>

<script>
    export default {
        name: 'addMembres',
        data() {
            return {
                id: '',
                name: '',
                role: '',
                photo: '',
                fb: '',
                ig: '',
                sc: '',
                yt: '',
            }
        },
        methods: {
            addMembre(){
                this.$store.dispatch('addMembre', {
                    // id: this.id,
                    name: this.name,
                    role: this.role,
                    // photo: this.photo,
                    fb: this.fb,
                    ig: this.ig,
                    sc: this.sc,
                    // yt: this.yt
                }).then((res)=>{
                    console.log(res);
                }, (error)=>{
                    console.log(error);
                });
            },
            delMembre(){
                this.$store.dispatch('delMembre', {
                    id: this.id,
                }).then((res)=>{
                    console.log(res);
                }, (error)=>{
                    console.log(error);
                });
            },
            modifMembre(){
                this.$store.dispatch('modifMembre', {
                    id: this.id,
                    name: this.name,
                    role: this.role,
                    // photo: this.photo,
                    fb: this.fb,
                    ig: this.ig,
                    sc: this.sc,
                }).then((res)=>{
                    console.log(res);
                }, (error)=>{
                    console.log(error);
                });
            },
        },
        created: function () {
            this.$store.dispatch('loadTeam');
        },
        computed: {
            loadTeam(){
                return this.$store.state.membres;
            }
        },
    }
</script>

<style scoped>

</style>