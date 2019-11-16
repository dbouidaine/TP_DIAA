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
            <tr>
              <td>1</td>
              <td>Diaeddin BOUIDAINE</td>
              <td><modal-table /></td>
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
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody,
      mdbBtn
    }
  }
</script>