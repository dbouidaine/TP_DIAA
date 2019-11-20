<template>
  <mdb-row>
    <mdb-col class="pb-2">
      <mdb-card class="black-text lighten-4">
        <mdb-card-header class="pt-4 gray">
          <mdb-card-title><strong>Résultat</strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col>
              <mdb-list-group>
                <mdb-list-group-item>Matricule: </mdb-list-group-item>
                <mdb-list-group-item>Nom: </mdb-list-group-item>
                <mdb-list-group-item>Date de Naissance: </mdb-list-group-item>
                <mdb-list-group-item>Adresse: </mdb-list-group-item>
                <mdb-list-group-item>E-Mail: </mdb-list-group-item>
                <mdb-list-group-item>Groupe: </mdb-list-group-item>
                <mdb-list-group-item>Abscences: </mdb-list-group-item>
                <mdb-list-group-item>Moyenne: </mdb-list-group-item>
              </mdb-list-group>
            </mdb-col>
          </mdb-row>
        </mdb-card-body>
      </mdb-card>
    </mdb-col>
  </mdb-row>
</template>
<script>
  import { mdbListGroup, mdbListGroupItem,mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbCard, mdbCardHeader, mdbCardTitle, mdbCardFooter, mdbCardBody } from 'mdbvue';
  export default {
    name: 'ListGroupPage',
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
      mdbCardTitle,
      mdbListGroup,
      mdbListGroupItem
    }
  }
</script>