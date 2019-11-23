<template>
  <mdb-row  v-show="1!=0">
    <mdb-col class="pb-2">
      <mdb-card class="black-text lighten-4">
        <mdb-card-header class="pt-4 gray">
          <mdb-card-title><strong>Fiche d'étudiant</strong></mdb-card-title>
        </mdb-card-header>
        <mdb-card-body>
          <mdb-row>
            <mdb-col>
              <mdb-list-group>
                  <mdb-list-group-item><strong>Matricule:</strong> {{matricule}} </mdb-list-group-item>
                  <mdb-list-group-item><strong>Nom:</strong>  {{nom}}  </mdb-list-group-item>
                  <mdb-list-group-item><strong>Date de Naissance:</strong>  {{date}}  </mdb-list-group-item>
                  <mdb-list-group-item><strong>Adresse:</strong>  {{adresse}}  </mdb-list-group-item>
                  <mdb-list-group-item><strong>E-Mail:</strong>  {{email}}  </mdb-list-group-item>
                  <mdb-list-group-item><strong>Groupe:</strong>  {{groupe}}  </mdb-list-group-item>
                  <mdb-list-group-item><strong>Nombre d'absences:</strong>  {{nb}}  </mdb-list-group-item>
                  <mdb-list-group-item><strong>Moyennes:</strong>  {{moyennes}}  </mdb-list-group-item>
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
    props:['matricule','nom', 'date', 'adresse', 'email', 'groupe', 'nb', 'moyennes'],
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
