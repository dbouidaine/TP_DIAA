<template>
  <div>
    <mdb-tbl responsive btn striped bordered>
      <mdb-tbl-head>
        
         <tr>
            <th>#</th>
            <th>Nom</th>
            <th></th>
            <th></th>

          </tr>
          </mdb-tbl-head>
          <mdb-tbl-body>
            <tr v-for="student in students" :key="student">
              <td>1</td>
              <td>{{student.nom}} </td>
              <td><modal-table v-bind:std="student"/></td>
              <td><mdb-btn tag="a" role="button" outline="danger" href="#" class="btn m-0"> Supprimer</mdb-btn></td>
              </tr>
          </mdb-tbl-body>
        </mdb-tbl>
  </div>
</template>
<script>
  import { mdbBtn,mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';
  import { modalTable  } from './ModalTable';
  export default {
    name: 'TablePage',
    props: {etudiants : {type:Array,}},
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody,
      mdbBtn
    }, data() 
    {
      return {
        students:this.etudiants
      }; 
    }
  }
</script>