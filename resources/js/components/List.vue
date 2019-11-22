<template>
  <mdb-row  v-show="info.matricule!=null">
    <mdb-col class="pb-2">
      <mdb-card class="black-text lighten-4">
        <mdb-card-header class="pt-4 gray">
          <mdb-card-title><strong>Résultat  </strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col>
              <mdb-list-group>
                <mdb-list-group-item>Matricule: {{info.matricule}} </mdb-list-group-item>
                <mdb-list-group-item>Nom:  {{info.nom}}  </mdb-list-group-item>
                <mdb-list-group-item>Date de Naissance:  {{info.dateNaissance}}  </mdb-list-group-item>
                <mdb-list-group-item>Adresse:  {{info.adresse}}  </mdb-list-group-item>
                <mdb-list-group-item>E-Mail:  {{info.email}}  </mdb-list-group-item>
                <mdb-list-group-item>Groupe:  {{info.groupe}}  </mdb-list-group-item>
                <mdb-list-group-item>Abscences:  {{info.nbAbsences}}  </mdb-list-group-item>
                <mdb-list-group-item>Moyenne:  {{info.moyennes}}  </mdb-list-group-item>
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
    props:['info'],
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