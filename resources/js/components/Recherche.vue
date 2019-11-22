<template>
  <mdb-row>
    <mdb-col class="pb-2">
      <mdb-card class="black-text lighten-4">
        <mdb-card-header class="pt-4 gray">
          <mdb-card-title><strong>Rechercher un étudiant</strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col>
              <mdb-input v-model="matricule" name="matricule" label="Entrer le Matricule" far icon="id-card"/>
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex gray justify-content-end">
          <mdb-btn tag="a" role="button" v-bind:href="url_admin" color="primary" icon="search-plus">Plus d'information</mdb-btn>
          <mdb-btn outline="green" v-on:click="search()" icon="search">Rechercher</mdb-btn>
        </mdb-card-footer>
      </mdb-card>
    </mdb-col>
  </mdb-row>
</template>
<script>
  import { mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody } from 'mdbvue';

  export default {
    name: 'FormsPage',
    props: ['url_admin'],
    components: {
      mdbRow,
      mdbCol,
      mdbInput,
      mdbTextarea,
      mdbBtn,
      mdbCard,
      mdbCardBody,
      mdbCardHeader,
      mdbCardFooter,
      mdbCardTitle
    }, data () {
      return {
        matricule:''
      }; 
    }, methods: 
    {
      search () 
      {   
              var cmp=this; 
              axios.post('etudiant', {
                    matricule : this.matricule 
                })
                .then(function (response) {
                    cmp.$emit('research_data',response.data); 
                })
                .catch(function (error) {
                   console.log(error); 
                });
      }
    }
  };
</script>