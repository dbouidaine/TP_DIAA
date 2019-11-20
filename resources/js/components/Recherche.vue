<template>
  <mdb-row>
    <mdb-col class="pb-2">
      <mdb-card class="black-text grey lighten-4">
        <mdb-card-header class="pt-4 white">
          <mdb-card-title><strong>Rechercher un étudiant</strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col>
              <mdb-input label="Entrer le Matricule" far icon="user"/>
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
        <mdb-card-footer class="d-flex white justify-content-end">
          <mdb-btn tag="a" role="button" v-bind:href="url_admin" color="primary" icon="paper-plane">Plus d'information</mdb-btn>
          <mdb-btn outline="purple" icon="">Rechercher</mdb-btn>
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
    }
  };
</script>